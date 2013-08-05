<?php

require 'lib/Stripe.php';

/*
 * StripeCom
 * Stripe.com Class
 *
 * Limitations: 
 * 	The class don't INSERT data to database but only UPDATE the user row to save the Stripe.com Customer ID
 *  Doesn't generate tokens. Please generate token via Javascript 
 * 
 * 
 */

class StripeCom
{

	/**
	 * The Stripe.com API Key
	 * @var string
	 */
	protected $apiKey = NULL;

	/**
	 * Array of Error messages
	 * @var array
	 */
	protected $errorMessages = array();

	/**
	 * Error flag
	 * @var boolean 
	 */
	protected $isError = FALSE;

	/**
	 * The Database table that has the customer data
	 * @var string
	 */
	protected $dbTableName = 'user';

	/**
	 * The Database table field that holds the Stripe.com customer ID
	 * @var string
	 */
	protected $dbStripeCustomerIdFieldname = 'stripe_customer_id';

	/**
	 * The Database table field that holds the Stripe.com customer email address
	 * If email information is in another table, please provide the user ID field name here e.g. user_id
	 * @var type 
	 */
	protected $dbUserEmailFieldname = 'email';

	/**
	 * The the user ID.
	 * If to use user ID rather than email address to fetch a row, default to NULL
	 * @var integer|string
	 */
	protected $userId = NULL;

	/**
	 * Set if to use user ID rather than email address to fetch row from DB default to FALSE
	 * @var boolean
	 */
	protected $dbUseUserId = FALSE;

	/**
	 * The Customer email address
	 * @var string
	 */
	protected $customerEmail = NULL;

	/**
	 * The Customer Stripe.com customer ID
	 * @var string
	 */
	protected $customerId = NULL;

	/**
	 * Stripe.com transaction types
	 * @var array
	 */
	protected $transactionTypes = array(
		'charge',
		'customer',
		'token',
		'plan',
		'subscription',
		'invoice',
		'invoiceitem',
		'coupon',
		'discount',
		'account',
		'event',
		'transfer'
	);

	/**
	 * The Transaction type to be made to Stripe.com
	 * @var string e.g. charge, customer, token, plan, subscription, invoice, invoiceitem, coupon, discount, account, event, transfer
	 */
	protected $transactionType = NULL;

	/**
	 * The Defaault currency to be used for Stripe.com
	 * @var string
	 */
	protected $currency = 'usd';

	/**
	 * The Amount to be charged
	 * 
	 * @var decimal
	 */
	protected $amount = 0.00;

	/**
	 * Minimum amount to be charged 1:1. Stripe.com accepts amount in cents.
	 * @var decimal
	 */
	protected $minAmount = 0.50;

	/**
	 * Constructor
	 * @param resource $dbConn
	 * @param array $options
	 * @return \StripeCom 
	 */
	public function __construct($apiKey = NULL, $options = array())
	{
		if ($apiKey !== NULL)
		{
			$this->setApiKey($apiKey);
		}

		return $this;
	}

	/**
	 * Set the DB Table Name
	 * @param string $tableName 
	 */
	public function setDbTableName($tableName)
	{
		$this->dbTableName = $tableName;
	}

	/**
	 * Set the DB Customer Field name
	 * @param string $fieldname
	 * @return \StripeCom  
	 */
	public function setDbStripeCustomerIdFieldname($fieldname)
	{
		$this->dbStripeCustomerIdFieldname = $fieldname;
		return $this;
	}

	/**
	 * Set the DB Field that has the email/user_id information
	 * @param string $fieldname
	 * @return \StripeCom 
	 */
	public function setDbUserEmailFieldname($fieldname)
	{
		$this->dbUserEmailFieldname = $fieldname;
		return $this;
	}

	/**
	 * Use the user_id id to fetch row from DB instead of email address
	 * @param boolean $flag 
	 * @return \StripeCom
	 */
	public function setUseUserId($flag)
	{
		$this->dbUseUserId = $flag;
		return $this;
	}

	/**
	 * Set the user Id
	 * @param string $uniqueId
	 * @return \StripeCom 
	 */
	public function setUserId($userId)
	{
		$this->dbUserId = $userId;
		$this->setUseUserId(TRUE);
		return $this;
	}

	/**
	 * Add an error message
	 * @param string $msg 
	 */
	protected function addErrorMessage($msg)
	{
		$this->isError = TRUE;
		$this->errorMessages[] = $msg;
	}

	/**
	 * Return the error messages
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errorMessages;
	}

	/**
	 * Check for error
	 * 
	 * @return boolean 
	 */
	public function isError()
	{
		return $this->isError;
	}

	/**
	 * Set the Stripe.com API Key
	 * @param string $apiKey
	 * @return \StripeCom 
	 */
	public function setApiKey($apiKey)
	{
		Stripe::setApiKey($apiKey);
		$this->apiKey = $apiKey;
		return $this;
	}

	/**
	 * Set the Currency for the charges
	 * @param string $currency
	 * @return \StripeCom 
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * Set the Amount to be charge
	 * @param decimal $amount
	 * @return \StripeCom 
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * Set the Transaction type
	 * @param string $transactionType
	 * @return \StripeCom 
	 */
	public function setTransactionType($transactionType)
	{
		if (in_array($transactionType, $this->transactionTypes))
		{
			$this->transactionType = $transactionType;
			return $this;
		}
		throw new Exception("Transaction type is not supported.");
	}

	/**
	 * Set the customer email address
	 * @param string $customerEmail
	 * @return \StripeCom 
	 */
	public function setCustomerEmail($customerEmail)
	{
		$this->customerEmail = $customerEmail;
		$this->fetchCustomer();
		return $this;
	}

	/**
	 * Return the customer email address
	 * @return string
	 */
	public function getCustomerEmail()
	{
		return $this->customerEmail;
	}

	/**
	 * Set the Stripe.com Customer ID
	 * @param string $customerId
	 * @return \StripeCom 
	 */
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		return $this;
	}

	/**
	 * Return the Stripe.com Customer Id
	 * @return type 
	 */
	public function getCustomerId()
	{
		return $this->customerId;
	}

	/**
	 * Fetch Customer Data from database that has the email address
	 * 
	 * @return boolean|array
	 */
	public function fetchCustomer()
	{

		$where = " WHERE {$this->dbUserEmailFieldname} = '{$this->customerEmail}'";
		if ($this->dbUseUserId)
		{
			$where = " WHERE {$this->dbUserEmailFieldname} = '{$this->userId}'";
		}
		$sql = "SELECT {$this->dbStripeCustomerIdFieldname}"
				. " FROM {$this->dbTableName}"
				. $where;

		$customer = mysql_query($sql);
		if ($customer)
		{
			$result = mysql_fetch_assoc($customer);
			$customerId = $result[$this->dbStripeCustomerIdFieldname];
			if (!empty($customerId))
			{
				$this->setCustomerId($customerId);
			}
			return $result;
		}
		return FALSE;
	}

	/**
	 * Save the customer ID to Database
	 * 
	 *  @return integer Number of rows updated
	 */
	protected function updateCustomer()
	{
		if (!empty($this->customerId))
		{
			$where = " WHERE {$this->dbUserEmailFieldname} = '{$this->customerEmail}'";
			if ($this->dbUseUserId)
			{
				$where = " WHERE {$this->dbUserEmailFieldname} = '{$this->userId}'";
			}
			$sql = "UPDATE {$this->dbTableName}"
					. " SET {$this->dbStripeCustomerIdFieldname} = '{$this->customerId}'"
					. $where;
			return mysql_query($sql);
		}
	}

	/**
	 * Get the parameters/options to be passed to Stripe.com
	 * @param array $options
	 * @return array 
	 */
	protected function getParams($params = array())
	{
		$array = $params;
		if ($this->transactionType == 'charge')
		{
			$array['currency'] = $this->currency;
			$amount = $this->amount;
			if (isset($params['amount']))
			{
				$this->setAmount($params['amount']);
				if ($this->amount < $this->minAmount)
				{
					$this->addErrorMessage("Amount should be greater than {$this->minAmount}.");
				}
				$amount = $params['amount'];
			}
			$array['amount'] = 100 * $amount;
		}

		if (isset($params['email']) && !empty($params['email']))
		{
			$this->setCustomerEmail($params['email']);
		}
		if (empty($this->customerEmail))
		{
			$this->addErrorMessage("Please provide the customer email address.");
		}


		if (empty($this->customerId))
		{
			$this->createCustomer($array);
		}
		$array['customer'] = !empty($this->customerId) ? $this->customerId : '';
		if (!empty($array['customer']))
		{
			if (isset($array['card']))
			{
				unset($array['card']);
			}
		}
		return $array;
	}

	/**
	 * Create a new customer via Stripe.com
	 * @param array $params 
	 * 
	 * @return boolean
	 */
	protected function createCustomer($params)
	{
		if (!$this->isError())
		{
			try
			{
				if (isset($params['currency']))
				{
					unset($params['currency']);
				}
				if (isset($params['amount']))
				{
					unset($params['amount']);
				}
				$params['email'] = $this->customerEmail;
				$stripeCustomer = Stripe_Customer::create($params);
				$stripeCustomer = $stripeCustomer->__toArray();
				$this->setCustomerId($stripeCustomer['id']);
				$this->updateCustomer();
				return TRUE;
			}
			catch (Exception $e)
			{
				$this->addErrorMessage($e->getMessage());
			}
		}
		return FALSE;
	}

	/**
	 * Charge customer via Stripe.com
	 * https://stripe.com/docs/api?lang=php#charges
	 * 
	 * @param array $options options/attributes according to docs
	 * @param string $email The Customer Email Address
	 * 
	 * @return boolean
	 */
	public function charge($params, $customerEmail = NULL)
	{
		if (!empty($customerEmail))
		{
			$this->setCustomerEmail($customerEmail);
		}
		$this->setTransactionType('charge');
		$params = $this->getParams($params);
		if (!$this->isError())
		{
			try
			{
				return Stripe_Charge::create($params);
			}
			catch (Exception $e)
			{
				$this->addErrorMessage($e->getMessage());
			}
		}
		return FALSE;
	}

	/**
	 * Charge customer via Stripe.com ONCE. 
	 * Will not create a customer data.
	 * https://stripe.com/docs/api?lang=php#charges
	 * 
	 * @param array $options options/attributes according to docs
	 * 
	 * @return boolean
	 */
	public function chargeOnce($params)
	{
		$this->setTransactionType('charge');
		if (!$this->isError())
		{
			try
			{
				$params['currency'] = $this->currency;
				return Stripe_Charge::create($params);
			}
			catch (Exception $e)
			{
				$this->addErrorMessage($e->getMessage());
			}
		}
		return FALSE;
	}

	/**
	 * Charge a customer via Stripe.com Plan
	 * A Customer should be subscribe
	 * 
	 * @param string $planId The Stripe.com Plan ID. Create a Plan: https://manage.stripe.com/#test/plans
	 * @param string $email The Customer Email Address
	 * 
	 * @return boolean
	 */
	public function chargeSubscriberToPlan($planId, $customerEmail = NULL)
	{
		if (!empty($customerEmail))
		{
			$this->setCustomerEmail($customerEmail);
		}
		try
		{
			$plan = Stripe_Plan::retrieve($planId);
			if ($plan)
			{
				$plan = $plan->__toArray();
				$amount = $plan['amount'] / 100;
				$interval = $plan['interval'];
				$name = $plan['name'];
				$description = "Subscription to {$name} (${$amount}/{$interval})";
				$this->setAmount($amount);
				$params = array(
					'description' => $description
				);
				return $this->charge($params);
			}
			else
			{
				$this->addErrorMessage("Cannot retrieve plan with id: '{$planId}'");
			}
		}
		catch (Exception $e)
		{
			$this->addErrorMessage($e->getMessage());
		}
		return FALSE;
	}

	/**
	 * Subscribe a customer to a plan
	 * @param string $planId The Stripe.com generated Plan ID
	 * @param string $email The Customer Email Address
	 * @params array $email
	 * @return boolean 
	 */
	public function subscribeCustomerToPlan($planId, $customerEmail = NULL, $params = array())
	{
		if (!empty($customerEmail))
		{
			$this->setCustomerEmail($customerEmail);
		}
		try
		{
			$params = $this->getParams($params);
			$customerId = $params['customer'];
			$customer = Stripe_Customer::retrieve($customerId);
			$customer->updateSubscription(array("plan" => $planId));
		}
		catch (Exception $e)
		{
			$this->addErrorMessage($e->getMessage());
		}
		return FALSE;
	}

}

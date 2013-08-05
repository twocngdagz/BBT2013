<div class="">
  <legend>Customer Order List</legend>
  <table class="flexProducts"></table>
  <div class="clear"><br /></div>
    <a href="#modal-create-product-options" role="button" class="btn btn-success" data-toggle="modal">Create New Product Option</a>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $(".flexProducts").flexigrid({
    url : 'core/view/grid/customer_orders.php',
    dataType : 'json',
    colModel : [ 
          { display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
          { display : 'Product', name : 'product_name', width : 80, sortable : true, align : 'left'}, 
          { display : 'Name', name : 'option_name', width : 280, sortable : true, align : 'left'}, 
          { display : 'Description', name : 'option_description', width : 380, sortable : true, align : 'left'},
          { display : 'Price', name : 'price', width : 60, sortable : true, align : 'left'},
          { display : 'Weight', name : 'weight', width : 60, sortable : true, align : 'left'}
          ],
    searchitems : [ {
      display : 'Id',
      name : 'id'
    }, {
      display : 'Option Name',
      name : 'option_name',
      isdefault : false
    }, {
      display : 'Option Description',
      name : 'option_description',
      isdefault : false
    }, {
      display : 'Price',
      name : 'price',
      isdefault : false
    }],
    onDoubleClick: false,
    multiSel: false,
    sortname : "id",
    sortorder : "desc",
    usepager : true,
    title : '',
    useRp : true,
    resize: false,
    rp : 10,
    showTableToggleBtn : true,
    width : 700,
    singleSelect: true,
    height : 270
  });
  
  
});

</script>
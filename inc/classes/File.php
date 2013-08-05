<?php

    class File
    {

        /**
        * Saves uploaded images to /images directory
        *
        */
        public function saveUploadedImage($image, $path, $previousimg="")
        {
            $allowedExts = array("jpg", "jpeg", "gif", "png");

			$extension = end(explode(".", $image["name"]));
            $newName = preg_replace("/\.{$extension}/", "", $image["name"]);
            $newName = strtolower($newName);
            $newName = preg_replace('/\s+/', '_', $newName);
            $newName = preg_replace('/\W*/', '', $newName);
            $newImageName = $newName.".".$extension;
            if ((($image["type"] == "image/gif") || ($image["type"] == "image/jpeg") || ($image["type"] == "image/pjpeg") || ($image["type"] == "image/png")) && in_array($extension, $allowedExts))
            {
                if ($image["error"] > 0)
                {
                    return 'image';
                }
                else
                {
                    if (file_exists("../images/{$path}/{$newImageName}"))
                    {
                        do
                        {
                            $pattern = "/(\d*$)/";
                            preg_match($pattern, $newName, $matches);
                            $nTH = (int)$matches[0];
                            $newName = preg_replace("/{$nTH}$/", '', $newName);
                            $nTH++;
                            $newName = $newName.$nTH;
                            $newImageName = $newName.".".$extension;
                        }while(file_exists("../images/{$path}/{$newImageName}"));
                    }

                    if ($previousimg!=="")
                    {
                        if (!is_dir("../images/{$path}/archive"))
                        {
                            mkdir("../images/{$path}/archive");
                        }

                        if (file_exists("../images/{$path}/archive/{$previousimg}"))
                        {
                            $prevImgArchive = "";
                            do
                            {
                                if($prevImgArchive=="")
                                {
                                    $prevExtension = end(explode(".", $previousimg));
                                    $prevName = preg_replace("/\.{$extension}/", "", $previousimg);
                                }
                                else
                                {
                                    $prevExtension = end(explode(".", $prevImgArchive));
                                    $prevName = preg_replace("/\.{$extension}/", "", $prevImgArchive);
                                }
                                $pattern = "/(\d*$)/";
                                preg_match($pattern, $prevName, $matches);
                                $nTH = (int)$matches[0];
                                $prevName = preg_replace("/{$nTH}$/", '', $prevName);
                                $nTH++;
                                $prevName = $prevName.$nTH;
                                $prevImgArchive = $prevName.".".$prevExtension;
                            }while(file_exists("../images/{$path}/archive/{$prevImgArchive}"));
                            $target_path = "../images/{$path}/archive/{$prevImgArchive}";
                        }
                        else
                        {
                            $target_path = "../images/{$path}/archive/{$previousimg}";
                        }

                        $previousimg = "../images/{$path}/". $previousimg;
                        $flag = rename($previousimg, $target_path);
                        if(!$flag)
                        {
                            return 'archive';
                        }
                    }
                    $newPath = "../images/{$path}/{$newImageName}";
                    move_uploaded_file($image["tmp_name"], $newPath);
                    return $newImageName;
                }
            }
            else
            {
                return 'format';
            }
        }

		/**
        * Process image uploads
        *
        */
        public function processImage($newImage, $path, $previousimg="")
		{
			$image = '';
			$message = '';

			if(!empty($newImage['name']))
			{
				$image = $this->saveUploadedImage($newImage,$path,$previousimg);
			}

			if($image =='exsist')
			{
				$message = 'Error: Image already exists.';
			}
			elseif($image =='format')
			{
				$message = 'Error: Image format error.';
			}
			elseif($image=='image')
			{
				$message = 'Error: Image error.';
			}
			elseif($image == 'archive')
			{
				$message = 'Error: Archiving previous image error.';
			}

			return array($image,$message);
		}

	}
?>

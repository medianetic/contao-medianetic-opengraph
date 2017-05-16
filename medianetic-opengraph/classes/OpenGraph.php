<?php


	/**
	 * Class OpenGraph
	 * Contain methods to add opengraph meta tags to Header
	 */

	/**
	* Add the Header Code to the Site (hook entry point)
	*
	* @param	string	$strContent		The content of the template.
	* @param	string	$strTemplate	The name of the template.
	* @return	string					The content of the template.
	*/

	

	class OpenGraph extends Controller {

		public function addOpenGraphTags($strBuffer, $strTemplate) {
						
			// only execute if head exists in frontend template
			if (strpos($strBuffer,'</head') != false) {
				global $objPage;
			
				$this->import('Environment');
				$env = $this->Environment;

				// URL
				$pageID = $objPage->id;
				$pageURL = $env->url."/".$objPage->alias;

				$pageDetails = $this->getPageDetails($pageID);
				// Site Name
				if(isset($pageDetails->og_site_name)) {
					$sitename = $pageDetails->og_site_name;
				} else {
					$sitename = $objPage->rootTitle." - ".$objPage->rootPageTitle;
				}

				// Image
				$og_output = "";
				if(isset($pageDetails->og_image)) {
					$objFile = FilesModel::findById($pageDetails->og_image);
					$imagePath= $env->url."/".$objFile->path;
				} 
				
				if(isset($pageDetails->og_title)) {
	        		$og_output .= "<meta name='og:title' content='".$pageDetails->og_title."'>"."\n";
	        	}
	        		        	
	        	if(isset($pageDetails->og_desc)) {
					$og_output .=  "<meta name='og:desc' content='".$pageDetails->og_desc."'>"."\n";
				}

				$og_output .=  "<meta name='og:url' content='".$pageURL."'>"."\n";
				
				if(isset($pageDetails->og_type)) {
					$og_output .=  "<meta name='og:type' content='".$pageDetails->og_type."'>"."\n";
				}

				$og_output .=  "<meta name='og:site_name' content='".$sitename."'>"."\n";
				
				if(isset($pageDetails->og_image)) {
					$og_output .=  "<meta name='og:image' content='".$imagePath."'>"."\n";
				}

	        	// Modify output
	        	$strBuffer = str_replace('</head>',$og_output."</head>",$strBuffer);
	    	}

	    	return $strBuffer;
		}
	}
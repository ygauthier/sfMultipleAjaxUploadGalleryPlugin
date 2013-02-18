#sfMultipleAjaxUploadGalleryPlugin v1.2.1
========
This plugin generates a gallery management module with an ajax multiple photo uploader.
Internationalization supports (En - Fr)
Sort your gallerie's photos, crop it, get as sizes of image you want, greyscale it, rotate it, flip it, colorize it.
Visualize your slideshow as you want by choosing one of the 2 slideshows engine included (skitter, anythingslider).


* Requirements														

1. To manipulate pictures, you have to install on your server the GD library or imagemagick


* Tutorial : 

1. you can watch a screencast here : [Video](http://vimeo.com/17367486 "Video")

2. you can follow the instructions below
3. you can follow the instructions in my website :                                                               http://www.leny-bernard.com/en/blog/show/sfMultipleAjaxUploadGalleryPlugin                                    


## Installation: 
In order to install the plugin sfMultipleAjaxUploadGalleryPlugin :
Type one of these symfony commands :

		plugin:install sfMultipleAjaxUploadGalleryPlugin

OR

Download the file [here](http://www.leny-bernard.com/uploads/plugins/sfMultipleAjaxUploadGalleryPlugin.zip "download the archive")

Then extract its content in the plugins directory of your project :

		plugin:install sfMultipleAjaxUploadGalleryPlugin

Get the plugin's resources by typing :

		symfony publish-assets
Then clear the cache :

		symfony cc

A last task to do is to enable the gallery and photos modules (backend) and the slideshow module (frontend) in the settings.yml specific app config's folder.
/apps/backend/settings.yml
You have to enter if it doesn't already exist this line
	
	all:  
	  .settings:
	    enabled_modules: [gallery, photos]

If it does exists, you just have to add in the list the gallery module like below :

 	all:  
	  .settings:
	    enabled_modules: [myOthersModule, gallery, photos]

/apps/frontend/settings.yml
same procedure that before

	all:  
	  .settings:
	    enabled_modules: [slideshow]

----------- or -----

 	all:  
	  .settings:
	    enabled_modules: [myOthersModule, slideshow]

You can now access to the gallery and get its awesome functionnalities.
The plugin is customizable :
So you can :

# choose the different sizes that you want for your thumbnails :
  sfMultipleAjaxUploadGalleryPlugin:
    thumbnails_sizes:
      - 50
      - 150
      - 300

# choose the default thumbnail size : :
  sfMultipleAjaxUploadGalleryPlugin:
    default_size: 50 # default, if not in thumbnails_sizes array new thumbnail is created

# Choose the portfolio/slideshow thumbnail size :
  sfMultipleAjaxUploadGalleryPlugin:
    portfolio_thumbnails_size: 150

# Chose the behavior when deleting a gallery :
  sfMultipleAjaxUploadGalleryPlugin:
    onDelete: cascade # none or cascade, cascade remove all gallery's photos

# the galleries path :
  sfMultipleAjaxUploadGalleryPlugin:
    path_gallery: <?php echo sfConfig::get("sf_upload_dir")."/gallery/" ;?>

# the theme for the gallery administration panel :
  sfMultipleAjaxUploadGalleryPlugin:
    csstheme: black # {black} or {original}

# get and customize your slideshow
You can use the skitter and anythingslider template !
write this to include the slideshow where you want :
  <?php include_component("slideshow","widget", array(
    "gallery"=> $galleries->getFirst(),
    "template" => "anything"
  )) ?>

The plugin use an extern library (GD is set by default but you can totally use imagemagick instead) in order to save your photos in some widths {by default : 50px, 150px, 300px, orignal size}

![alt text](http://www.operationcaribou.com/uploads/thumbnail/50_DSCN8144.JPG "50")
![alt text](http://www.operationcaribou.com/uploads/thumbnail/150_DSCN8144.JPG "150")
![alt text](http://www.operationcaribou.com/uploads/thumbnail/300_DSCN8144.JPG "300")

![alt text](http://www.leny-bernard.com/uploads/plugins/crop.png "Crop")
![alt text](http://www.leny-bernard.com/uploads/plugins/edition.png "Edition")
![alt text](http://www.leny-bernard.com/uploads/plugins/slider.png "Slideshow")

CREDITS :

SPECIAL THANKS TO THE COMMUNITY FOR ITS HELP :

# [DAMIEN BRAULT](mailto:bd.tel@free.fr "email Damien Brault") aka GABS (notification messages, color filters, image rotation, image flipping)
# [MATHIEU GIRARD](mailto:mathieu.etu@gmail.com "email Mathieu GIRARD") (image sorting)
# [VIVIEN OLIVIER](mailto:vivien.olivier@gmail.com "email Vivien Olivier") (refactoring, configuration)


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/ygauthier/sfMultipleAjaxUploadGalleryPlugin/trend.png)](https://bitdeli.com/free "Bitdeli Badge")


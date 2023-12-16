function UploadImage()
{
	var $this = this;
	var _uploadedImg = null;
	var _imgData = null;
	var _thumbData = null;
	var _scaleFactor = null;
	var _imageTarget = null;
	var _inputFile = null;

	this.addInput = function($inputTarget,$imgTarget,$thumbScale)
	{
		//console.log("addInput",$inputTarget,$imgTarget);
		_scaleFactor = $thumbScale;
		_imageTarget = $imgTarget;
		_inputFile = $inputTarget;
		$inputTarget.on('change', function()
				{
					//console.log("addInput-change");
					_imageTarget.empty();
					_uploadedImg = new Image();
					_uploadedImg.src = window.URL.createObjectURL(this.files[0]);

					_uploadedImg.onload = function() {
						//console.log("addInput-onload");
							var cvs = document.createElement('canvas');
							cvs.width = _uploadedImg.width;
							cvs.height = _uploadedImg.height;
							var ctx = cvs.getContext("2d");
							ctx.drawImage(_uploadedImg,0,0);
							_imgData =   cvs.toDataURL();
							ctx.clearRect(0, 0, 0, 0);
							ctx.beginPath();
							//console.log(_uploadedImg);
							if(_scaleFactor)
							{
									$this.createThumb();
							}
							else
							{
								var image = new Image();
								image.src = window.URL.createObjectURL(this.files[0]);
								_imageTarget.append(image);
							}
					  }
				});
	}

	this.getImageData = function()
	{
		if(!_imgData)return null;
		return _imgData.split(',')[1];
	}

	this.getThumbData = function()
	{
		if(!_thumbData)return null;
		return _thumbData.split(',')[1];
	}

	this.createThumb = function()
	{
		var image = new Image();
		image.src = _imgData;

		image.onload = function() {
			var to = calculateAspectRatioFit(image.width,image.height,_scaleFactor[0],_scaleFactor[1]);
			var cvs = document.createElement('canvas');
			var nw = to.width;
			var nh = to.height;
			cvs.width = nw;
			cvs.height = nh;
			var ctx = cvs.getContext("2d");
			ctx.drawImage(image,0,0,nw,nh);
			_thumbData =   cvs.toDataURL();
			ctx.clearRect(0, 0, 0, 0);
			ctx.beginPath();

			_imageTarget.append(cvs);
	  }
	}
	
	this.destroy = function(){
		if(_inputFile)
			{
			_inputFile.val('');
			_inputFile.unbind();
			}
		
		_inputFile = null;
		_uploadedImg = null;
		
		_imgData = null;
		_thumbData = null;
		if(_imageTarget)_imageTarget.empty();
		_imageTarget = null;
	}

}

/**
 * Conserve aspect ratio of the orignal region. Useful when shrinking/enlarging
 * images to fit into a certain area.
 *
 * @param {Number} srcWidth Source area width
 * @param {Number} srcHeight Source area height
 * @param {Number} maxWidth Fittable area maximum available width
 * @param {Number} maxHeight Fittable area maximum available height
 * @return {Object} { width, heigth }
 *
 */
function calculateAspectRatioFit(srcWidth, srcHeight, maxWidth, maxHeight) {

	if(maxWidth > srcWidth) maxWidth = srcWidth;
	if(maxHeight > srcHeight) maxHeight = srcHeight;
   var ratio = [maxWidth / srcWidth, maxHeight / srcHeight ];
   ratio = Math.min(ratio[0], ratio[1]);

   return { width:srcWidth*ratio, height:srcHeight*ratio };
}


/*
function UploadImage($inputTarget,$imgTarget)
{

	$inputTarget.on('change', function() {

       // var image = new Image();
        $imgTarget.attr('src', window.URL.createObjectURL(this.files[0]));
console.log(window.URL.createObjectURL(this.files[0]));
            return;

            image.onload = function() {
        	var cvs = document.createElement('canvas');
    		cvs.width = image.width;
    		cvs.height = image.height;
    		var ctx = cvs.getContext("2d");
    		ctx.drawImage(image,0,0);
    		_modal.find('.targetInputImg').append(cvs);

    		//var theImgData = (ctx.getImageData(0, 0, cvs.width, cvs.height));

			//encoder = new JPEGEncoder();
    		//jpegURI = encoder.encode(theImgData,100);
    		jpegURI =  cvs.toDataURL();
    		console.log(jpegURI);

    		//$('.uploadImage').attr('data64',jpegURI);
        };

});

}
*/
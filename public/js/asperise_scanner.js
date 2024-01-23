
//
// Please read scanner.js developer's guide at: http://asprise.com/document-scan-upload-image-browser/ie-chrome-firefox-scanner-docs.html
//

/** Initiates a scan */
function scanToJpg() {
    scanner.scan(displayImagesOnPage,
            {
                "output_settings": [
                    {
                        "type": "return-base64",
                        "format": "jpg"
                    }
                ]
            }
    );
}

/** Processes the scan result */
function displayImagesOnPage(successful, mesg, response) {
    if(!successful) { // On error
        console.error('Failed: ' + mesg);
        return;
    }

    if(successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User cancelled.
        console.info('User cancelled');
        return;
    }

    var scannedImages = scanner.getScannedImages(response, true, false); // returns an array of ScannedImage
    for(var i = 0; (scannedImages instanceof Array) && i < scannedImages.length; i++) {
        var scannedImage = scannedImages[i];
        processScannedImage(scannedImage);
    }
}

/** Images scanned so far. */
var imagesScanned = [];

/** Processes a ScannedImage */
function processScannedImage(scannedImage) {
    imagesScanned.push(scannedImage);
    var elementImg = scanner.createDomElementFromModel( {
        'name': 'img',
        'attributes': {
            'class': 'scanned',
            'src': scannedImage.src
        }
    });
    document.getElementById('images').appendChild(elementImg);
}

<!-- Previous lines are same as demo-01, below is new addition to demo-02 -->

/** Upload scanned images by submitting the form */
function submitFormWithScannedImages() {
    if (scanner.submitFormWithImages('form1', imagesScanned, function (xhr) {
        if (xhr.readyState == 4) { // 4: request finished and response is ready
            document.getElementById('server_response').innerHTML = "<h2>Response from the server: </h2>" + xhr.responseText;
            document.getElementById('images').innerHTML = ''; // clear images
            imagesScanned = [];
        }
    })) {
        document.getElementById('server_response').innerHTML = "Submitting, please stand by ...";
    } else {
        document.getElementById('server_response').innerHTML = "Form submission cancelled. Please scan first.";
    }
}

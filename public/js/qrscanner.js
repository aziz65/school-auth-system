// qrscanner.js

// Function to initialize camera and scan QR codes
function initScanner() {
    const video = document.createElement('video');
    document.body.appendChild(video);

    // Using html5-qrcode library
    const html5QrCode = new Html5Qrcode("qr-reader");

    // Start the camera
    html5QrCode.start({ facingMode: "environment" }, { verbose: true }, (decodedText, decodedResult) => {
        console.log(`QR Code detected: ${decodedText}`);
        verifyStudentCode(decodedText);
    }).catch(err => {
        console.error(`Error starting scanner: ${err}`);
    });
}

// Function to verify the student code
function verifyStudentCode(code) {
    // Simulate checking the code
    const validStudentCodes = ["CODE123", "CODE456", "CODE789"]; // Example codes

    if (validStudentCodes.includes(code)) {
        console.log(`Student code ${code} is valid.`);
        // Add more logic to handle valid student codes
    } else {
        console.log(`Student code ${code} is invalid.`);
    }
}

// Call the init function to start scanning
initScanner();
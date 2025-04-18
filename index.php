<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WV IT-104 - Employee's Withholding Exemption Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            font-size: 14px;
            color: #121212;
            background-color: #fff;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #006400;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header img {
            width: 80px;
            margin-right: 20px;
        }

        .header-title {
            color: #006400;
        }

        .title {
            text-align: right;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .bold {
            font-weight: bold;
        }

        .note {
            font-weight: bold;
            margin-top: 15px;
        }




        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 40px;
        }

        .form-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 6px;
            margin-top: 4px;
            font-size: 14px;
            border: 1px solid #ccc;
        }

        .inline {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .inline label {
            flex: 1;
            min-width: 200px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .footer {
            font-style: italic;
            font-size: 13px;
            margin-top: 20px;
        }

        .signature-section {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .signature-section label {
            flex: 1;
        }

        .bottom-note {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-top: 40px;
            border-top: 3px solid #1a5531;
            padding-top: 10px;
            color: #1a5531;
            font-weight: bold;
        }




        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .header,
        .footer {
            padding: 10px 20px;
            background-color: #f8f8f8;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            max-width: 800px;
            margin: auto;
        }

        .main-container {
            /* padding: 20px;
      max-width: 900px;
      margin: auto; */
            max-width: 800px;
            margin: auto;
            border: 1px solid #000;
            padding: 20px;

        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
            border-bottom: 3px solid #2d5d2d;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .logo-circle {
            width: 60px;
            height: 60px;
            background: radial-gradient(circle at top, #ffc107, #2e7d32);
            border-radius: 50%;
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
            color: #2d5d2d;
        }

        .form-title {
            text-align: right;
            font-size: 18px;
            color: #2d5d2d;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .form-section {
            font-size: 14px;
            margin-top: 30px;
        }

        .form-section p {
            margin-bottom: 10px;
        }

        .input-line {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            gap: 20px;
        }

        .input-line label {
            min-width: 100px;
        }

        .input-line input,
        .input-line select {
            flex: 1;
            padding: 4px;
            border: 1px solid #000;
            border-bottom: 1px solid #000;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
        }

        .statement {
            font-style: italic;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        h1 {
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        h3 {
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        .button:hover {
            background-color: #45a049;
        }

        #signature-pad-1 {
            border: 1px solid #ccc;
            border-radius: 4px;
            max-width: 900px;
            height: 150px;
            touch-action: none;
            box-sizing: border-box;
        }

        #signature-pad-2 {
            border: 1px solid #ccc;
            border-radius: 4px;
            max-width: 900px;
            height: 150px;
            touch-action: none;
            box-sizing: border-box;
        }

        .signature-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            gap: 10px;
        }

        .radio {
            width: 2%;
        }
    </style>
</head>

<body>
    <div id="pdfContent">
        <div class="container">
            <div class="header">
                <img src="https://cws.ind.in/atoc/wp-content/uploads/2025/04/tax_logo-1.png" alt="WV Seal" style="width:250px">
            </div>

            <div class="title">
                WV IT-104<br>
                Employee's Withholding<br>
                Exemption Certificate
            </div>

            <p>Complete this form and present it to your employer to avoid any delay in adjusting the amount of state income tax to be withheld from your wages.</p>

            <div class="form-container">
                <form>
                    <label>Name <input type="text" name="name"></label>
                    <label>Social Security Number <input type="number" name="ssn"></label>
                    <label>Address <input type="text" name="address"></label>
                </form>
            </div>
        </div>
    </div>

    <form id="emailForm" method="POST" enctype="multipart/form-data" action="sent.php">
        <button type="button" class="btn" id="sendPdfButton" onclick="generatePDF()">Send PDF to Email</button>
    </form>



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
  

    <script>
async function generatePDF() {
        const { jsPDF } = window.jspdf;
        const element = document.getElementById("pdfContent");

        if (!element) {
            alert("❌ Element with id 'pdfContent' not found.");
            return;
        }

        try {
            console.log("Capturing content for PDF...");
            const canvas = await html2canvas(element, { scale: 2 });
            const imgData = canvas.toDataURL("image/png");

            console.log("Creating PDF...");
            const pdf = new jsPDF("p", "pt", "a4");
            const pdfWidth = pdf.internal.pageSize.getWidth();
            const pdfHeight = (canvas.height * pdfWidth) / canvas.width;
            pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);

            console.log("Converting PDF to Blob...");
            const pdfBlob = pdf.output("blob");

            console.log("Preparing form data...");
            const formData = new FormData();
            formData.append("pdf", new File([pdfBlob], "WV-IT104.pdf", { type: "application/pdf" }));

            console.log("Sending PDF to server...");
            const response = await fetch("sent.php", {
                method: "POST",
                body: formData
            });

            if (response.ok) {
                alert("✅ PDF sent successfully!");
            } else {
                alert("❌ Failed to send PDF. Server returned an error.");
            }

        } catch (error) {
            console.error("Error generating or sending PDF:", error);
            alert("❌ An error occurred while processing the PDF.");
        }
    }
        </script>




</body>

</html>
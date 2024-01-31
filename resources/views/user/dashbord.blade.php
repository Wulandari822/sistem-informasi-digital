<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Layout</title>
<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        height: 100%;
    }

    .half {
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 5px solid #0C2D57; /* Warna bingkai */
        border-radius: 10px; /* Sudut melengkung pada bingkai */
        overflow: hidden; /* Hindari bagian dari konten yang melewati bingkai */
    }

    .full-height {
        height: 100%;
    }

    .top-left {
        background-color: #f0f0f0;
    }

    .top-right,
    .bottom-right {
        background-color: #f5f5f5;
    }

    /* Styling for demonstration purposes */
    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    h2 {
        color: #333;
    }

    .half-divider {
        border-top: 5px solid #0C2D57; /* Warna bingkai untuk pemisah */
        margin-top: -5px; /* Hindari tumpang tindih dengan bingkai */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="half">
            <div class="full-height top-left">
                <div class="content">
                    <h2>Top Half Left (Full Height)</h2>
                </div>
            </div>
        </div>
        <div class="half">
            <div class="full-height top-right">
                <div class="content">
                    <h2>Top Half Right (Full Height)</h2>
                </div>
            </div>
            <div class="half-divider"></div>
            <div class="full-height bottom-right">
                <div class="content calendar-container">
                    <h2>Bottom Half Right (Full Height)</h2>
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
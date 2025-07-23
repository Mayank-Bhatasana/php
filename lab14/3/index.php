<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .form-section {
            margin-bottom: 30px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .target-test {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        iframe {
            width: 100%;
            height: 200px;
            border: 1px solid #ddd;
            margin-top: 20px;
            background: white;
        }
        .required:after {
            content: " *";
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Advanced Form Demonstration</h1>
        
        <!-- Text input outside the form but associated with it -->
        <div class="form-group">
            <label for="external-field" class="required">External Field (associated with form)</label>
            <input type="text" id="external-field" name="external-field" form="main-form" required>
        </div>
        
        <!-- Main form with various attributes -->
        <form id="main-form" 
              novalidate 
              autocomplete="on" 
              accept-charset="UTF-8"
              action="form_handler.php" 
              method="post">
            
            <div class="form-section">
                <h2>Personal Information</h2>
                
                <div class="form-group">
                    <label for="name" class="required">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email" class="required">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">
                </div>
            </div>
            
            <div class="form-section">
                <h2>Additional Information</h2>
                
                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="">Select a country</option>
                        <option value="us">United States</option>
                        <option value="ca">Canada</option>
                        <option value="uk">United Kingdom</option>
                        <option value="au">Australia</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea id="comments" name="comments" rows="4"></textarea>
                </div>
            </div>
            
            <div class="form-section">
                <h2>Target Testing</h2>
                <p>Submit the form with different target values:</p>
                
                <div class="target-test">
                    <button type="submit" formtarget="_self">Submit (_self)</button>
                    <button type="submit" formtarget="_blank">Submit (_blank)</button>
                    <button type="submit" formtarget="result-frame">Submit (iframe)</button>
                </div>
                
                <p>Or test submitting to this page:</p>
                <button type="submit" formaction="#" formtarget="_self">Submit to this page</button>
            </div>
        </form>
        
        <!-- Result iframe for target testing -->
        <iframe name="result-frame" title="Form Submission Results"></iframe>
        
        <!-- Display form data if submitted to this page -->
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP App - Azure Container Registry</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; margin: 0; padding: 40px; text-align: center; }
        .container { background: white; max-width: 600px; margin: 0 auto; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #0078d4; margin-bottom: 10px; }
        .status { display: inline-block; padding: 8px 15px; background-color: #d4edda; color: #155724; border-radius: 20px; font-weight: bold; margin: 15px 0; }
        .info { font-family: monospace; background: #eee; padding: 10px; border-radius: 4px; text-align: left; font-size: 14px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Dockerized PHP Application</h1>
    <div class="status">✓ Successfully Running in Azure Container Registry</div>
    
    <p>This page confirms that your GitHub Actions pipeline successfully built your custom Apache image and deployed it.</p>
    
    <div class="info">
        <strong>PHP Version:</strong> <?php echo phpversion(); ?><br>
        <strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>
        <strong>Current Server Time:</strong> <?php echo date('Y-m-d H:i:s e'); ?><br>
        <strong>Client IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?>
    </div>
</div>

</body>
</html>

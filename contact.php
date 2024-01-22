<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Get in touch</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php require_once 'components/header.php'; ?>
    <main>
        <h1>Get in touch</h1>
        <form method='post' action='contact.php'>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Jess Doe" required>
            <label for="name">E-Mail</label>
            <input type="email" name="email" id="name" placeholder="jess.doe@example.xyz" required>

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="100" rows="10" placeholder="hello world!" required></textarea>

            <button type="submit">Submit!</button>
        </form>
    </main>
</body>

</html>
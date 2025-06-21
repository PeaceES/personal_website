<!DOCTYPE html> <!--This tells the browser 'the document is in fact html'-->

<html>          <!--This tells the browser 'the enclosed content is html'-->

<head>          <!--Used to pass content that is not displayed on the page/ metadata useful for SEO -->
    <title>Peace's Feedback Page</title>  
    <!--Here we can also add CSS content to affect the look and feel of the page etc-->

</head>

<body>          <!--To say this is the body of the page/ content to be shown-->
<h1> Welcome to Peace's feedback page </h1>
<img src = "html page photo.jpg" width = "400" height = "400">
<h3> Below is a feedback form </h3>

<!--but I can use <h6> if I want the size of the header to be smaller
I need to use a tag to tell HTML that the text below is a paragraph -->
<section>
    <p>ChatGpt said it innit, it's not me who said innit, but i agree innit: <br> <b><em>Peace</b></em> is a young woman with a heart full of kindness and creativity. Her smile brightens the room, and her laughter is contagious. She embraces challenges with determination, inspiring those around her. Known for being a loyal friend and passionate learner, Peace strives to make the world a better place every day.</p>
    <p>This is her review and feedback page. She values the thoughts and experiences of those who know her, from fun adventures to heartfelt conversations. Your feedback helps her grow and become an even better friend. Please feel free to share your thoughts, and together, let’s keep building amazing memories! Thank you!</p>
<!--The second <p> </p> indicates to the file that this is a second paragraph -->
</section>
<!--The second <p> </p> I don't yet get the difference between paragraph and section for html. Maybe it's just for the coder -->

    while I don't disagree with what AI models have to say about me who can challenge their expertise after all😌 I do want to hear from my human friends too🫶🏾
<!--Putting <section><section/> doesn't create a physical separation/ line break -->
<p>
<form action = "process.php" method = "POST">                    <!--tells the web to send the data inputtted by the user to a file named 'process.php'-->
    <label>How funny is Peace on a scale of 1-10</label>            <!--the lable is what the user sees-->
    <input type = "number" name = "funny_rating"><br>                               <!-- the name is the variable name we use while coding. for eg in PHP -->
   
    <label>Rate Peace's cooking skills on a scale of 1-10</label>
    <input type = "number" name = "cooking_rating"><br>             <!--'type' won't let the user enter the wrong data type-->

    <Label>Would you give Peace a kidnet if she needed one? yes or yes</Label>
    <input type = "text" name = "kidney_answer" pattern = "yes"><br>     <!--'pattern' rejects any answer other than yes-->

    <button type= "submit" name= "submit">Submit</button>

</form>
</p>
</body>
</html>


<!--Next: figure out how to use $POST to collect the form data into a PHP file-->
<!--turn my comments into docstring -->
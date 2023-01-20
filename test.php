<?php

    $email="";
    $first_name="";
    $choices="";

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['first_name'])){
        $first_name = $_POST['first_name'];
    }
    if(isset($_POST['choices'])){
        $choices = $_POST['choices'];
    }
?>

<style>
    .thankyou {
        font-style: italic;
        font-size: 20px;
        color: blue;
    }
    .error {
        background-color: red;
        color: white;
        width: 400px;
    }
</style>

<h2>Enquiry Form</H2>

<form method="POST">

    <div>
        <label for="email">Email:</label>
        <input
            type="email"
            value="<?php echo $email; ?>"
            name="email"
        > 
    </div>
    <?php 
    if(empty($_POST['email'])) {
        echo "<div class='error'>*Please enter your email address.</div>";
    }
    ?>

    <div>
        <label for="first_name">First Name: </label>
        <input
            type="text"
            value="<?php echo $first_name; ?>"
            name="first_name"
        >
    </div>
    
    <?php 
        if(empty($_POST['first_name'])) {
        echo "<div class='error'>*Please enter your name.</div>";
    }
    ?>

    <div>
        <label for="choices"><br />Please select one:<br /> </label>
        
            <input
                type="radio"
                value="Question - Service"
                name="choices"
                    <?php if (isset($choices) && $choices=="Question - Service") echo "checked";?>
            > I have a question about your service.<br />
            
            <input
                type="radio"
                value="Opinion"
                name="choices" 
                    <?php if (isset($choices) && $choices=="Opinion") echo "checked";?>
            > I have an opinion about your service.<br />
            
            <input
                type="radio"
                value="Career"
                name="choices"
                <?php if (isset($choices) && $choices=="Career") echo "checked";?>
            > I want to enquire about career.<br />
    </div>

    <?php 
    if(empty($_POST['choices']))  {
        echo "<div class='error'>*Please select one from above.</div>";
    }
    ?>

    <button type="submit">Submit</button>
</form>

<?php
    if(!empty($_POST['email']) && !empty($_POST['first_name']) && !empty($_POST['choices'])){
        echo "<div class='thankyou'>Thank you for your enquiry $first_name!</div>";

        echo "<div class='thankyou'>We will be in touch shortly.</div>";
    } else {
        echo "Please check the comment above.";

    }
?>
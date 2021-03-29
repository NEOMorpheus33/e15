<!DOCTYPE html>     
<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Harvard Extension School Calculator | Joseph Fanning</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
        <style>

        .center {
          display: flex;
          justify-content: center;
          align-items: center;
        }

    </style>
    </head>
  <body> 

    <!--  .hero section on the top -->
    <section class="hero is-small">
        <div class="hero-body">
            <div class="container">
                <figure class="image center">
                    <img src="images/calc.jpg" style="max-width: 300px;"> 
                </figure>
                <h1 class="center subtitle has-text-gray is-size-4 has-text-gray"> Joe's Harvard | HES Grade Calculator</h1>
            </div>
        </div>
    </section>
    <!-- (closed) top /.hero sec -->

    <!-- /.section -->
    <section class="section" style="padding: 0px;">
        <div class="container">
            <div class="columns is-gapless">

                <!-- first column -->
                <div class="column">
                    <article class="media notification is-white">
                        <figure class="media-left">
                            <span class="icon is-medium has-text-info">
                                <i class="fas fa-2x fa-calculator"></i>
                            </span>
                        </figure>
                        <div class="media-content">
                            <h1 class="title is-size-5">Joe Fanning Harvard Extension School (HES) Calculator App</h1>
                            <p class="subtitle is-size-6 has-text-gray">
                                This app calculates your class grades for you with three or more inputs. No need to waste expensive notebook paper on your grade calculations. It's fast, accurate, and easy or simple to use. Spend more time studying
rather than not knowing your grade average in your class and failing by a point or more. Don't forget to care about
your grades, each point, and your GPA, plus projects so that you can become a professor one day!  

                                This app was engineered by Joseph Paul Fanning who is a software engineering major at Harvard University in Cambridge Mass, brattle street. He is 35 years old and has a B.S in Business Administration from Ramapo College of New Jersey.  
                                 <strong>Harvard HES Grade Calculator!.</strong>
                            </p>
                        </div>
                    </article>
                </div>
                <!-- end of first col -->

                <!-- second column -->
                <div class="column">
                    <article class="media notification is-white">
                        <figure class="media-left">
                            <span class="icon is-medium" style="color:rgb(58, 235, 35);">
                                <i class="far fa-2x fa-question-circle"></i></i>
                            </span>
                        </figure>
                        <div class="media-content">

<span style="color:green"><h1>Do I think I'm passing?</h1> </span> 

<form action="/action_page3.php">
  <input type="checkbox" id="yescheck" name="yescheck" value="Yes :-)"> 
  <label for="yescheck"> Yes :-)</label><br>
  <input type="checkbox" id="nocheck" name="nocheck" value="No :-(">
  <label for="nocheck"> No :-(</label><br>
  <input type="submit" value="Submit"> <br>
  
  </form> 
  
  <span style="color:green"><h2>I am?:</h2></span>
  
  <form action="/e15p2hesweb/action_pageradio.php"> 
<input type="radio" name="gender" value="In pre-school">In pre-school  
<input type="radio" name="gender" value="In grade school">In grade school 
<input type="radio" name="gender" value="In high school">In high school  
<input type="radio" name="gender" value="In an undergrad college">In an undergrad college 
<input type="radio" name="gender" value="In an undergrad university">In an undergrad university 
<input type="radio" name="gender" value="A graduate student in college">A graduate student in college
<input type="radio" name="gender" value="A graduate student at a university">A graduate student at a university <br>   

<input type="submit" value="Answer"> 

</form>



 

                            
                        </div>
                    </article>
                </div>
                <!-- end -->

                <!-- third column -->
                <div class="column">
                    <article class="media notification is-white">
                        <figure class="media-left">
                            <span class="icon is-medium" style="color:rgb(170, 5, 170);">
                                <i class="far fa-2x fa-smile-beam"></i>
                            </span>
                        </figure>
                        <div class="media-content">
                            <h1 class="title is-size-5">How do I use it?</h1>
                            <p class="subtitle is-size-6 has-text-gray">
                                Put your <strong>grade</strong> (marks)
                                in the <span class="has-text-primary">blue column</span>, and put the corresponding <strong>Grade Weight</strong>
                                of the grade (e.g 10 percent would be entered as 10) 
                                in the <span class="has-text-danger">red column,</span> and press the caluculate button.
                            </p>
                        </div>
                    </article>
                </div>
                <!-- end -->

            </div>
        </div>
    </section>
    <!-- /.section --> 

    <!-- the grade section -->
    <section class="section">
        <div class="container" >
            <div class="columns ">

                <!-- first column (grade) -->
                <div class="column">
                    <article class="media notification has-background-white">
                        <figure class="media-left">
                        <span class="icon is-medium" style="color:rgb(228, 30, 185);">
                            <i class="far fa-2x fa-file-alt"></i></span>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h1 class="title is-size-4 has-text-black" id="grade_head">Your grade avg. is: </h1>
                                <p class="title is-size-3 center has-text-gray" id="grade_final">0.00</p>
                                <p class="subtitle is size-3 center has-text-dark" id="grade_weight">with combined weight of 0.00</p>
                            </div>
                        </div>
                    </article> 
                </div>
                <!-- end of first (grade) column -->

                <!-- second column (grade entry) -->
                <div class="column is-two-thirds">
                    <article class="media notification has-background-white">
                        <figure class="media-left">
                        <span class="icon is-medium" style="color:rgb(255, 102, 0);">
                                <i class="fas fa-2x fa-bars"></i></span>
                        </figure>
                        <div class="media-content">
                            <div class="content">

                                <h1 class="title is-size-5 has-text-black">Enter grades right here.</h1>
                                <h1 class="subtitle is-size-6 has-text-gray">
                                    grades in the left (blue) column, weights in the right (red) column
                                    <br class="is-size-4"> Power tip!- press the tab button on your computer keyboard to scroll through the list faster & more easily.  <strong><i>tab</i></strong> through the list.
                                </h1>

                                <div class="columns">

                                    <!-- the raw-grades column -->
                                    <div class="column">

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">1.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="e.g. 75">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="5">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">2.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">3.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">4.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">5.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">6.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">7.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">8.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">9.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">10.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="..."> 
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

  

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">11.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

 

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">12.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

  

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">13.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

  

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">14.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

  

                                        <div class="field is-horizontal">
                                                <div class="field-label is-small">
                                                    <label class="label">15.</label>
                                                </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <p class="control is-expanded has-icons-left">
                                                        <input class="input is-rounded is-small is-primary"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded has-icons-left">
                                                        <input class="input is-small is-rounded is-danger"
                                                        onkeypress="return isNumberKey(event)" type="text" placeholder="...">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                        <!-- calculator button -->
                                        <div class="field is-horizontal">
                                            <div class="field-label">
                                                <!-- left empty for spacing -->
                                            </div>
                                            <div class="field-body center">
                                                <div class="field">
                                                    <div class="control center">
                                                        <button class="button is-rounded is-medium is-success is-fullwidth" id="calculate_button" type="button" value="submit">
                                                            <span>Calculate</span>
                                                            <span class="icon is-small"><i class="fas fa-check"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- end of grades col -->

                                </div>

                            </div>

                        </div>
                    </article>
                </div>
                <!-- end of second (grade-entry) column -->

            </div>
        </div>

<center>  

<h2>Passing? Yes or No</h2>  

 <html>
<body>

<form action="action_page.php" method="GET">
yes or no: <input type="text" name="yes"><br>
<input type="submit">
</form>

</body>
</html> 

</center> 
    
</section>



    <!-- the footer -->
    
    <footer class="center has-text-gray is-size-6">Copyright (&copy;) 2021&nbsp;<strong>Joseph Fanning</strong></footer>
    <footer class="center has-text-gray is-size-6">...</footer>
    <!-- close the footer  -->

    <script src="index.js"></script> 
    </body> 
</html>

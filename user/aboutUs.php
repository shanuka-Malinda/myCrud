<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\aboutUs.css">
    <title>About Us</title>
    <style>
      body{
        background: url("assets/freshFish.jpg")no-repeat;
        background-size:cover; 
      }
      .main{
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .main section{
        text-align: center;
        padding: 20px;
        margin: 10px;
        border-radius: 20px;
        width: 400px;
        height: 400px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.8);
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        cursor: pointer;
        position: relative;
        transform-style: flat;
        transition: .3s;
      }
      .main section:hover{
        width: 410px;
        height: 410px;
      }
      .main h3{
         color: wheat;
      }
      .main h2{
        color: darkred;
      }
      iframe{
        width: 100%;
        background-color:darkgray;
      }
    </style>
</head>
<body>
<?php $activePage = 'aboutus'; ?>

<div class="wrapper">
        <div class="header">
          <?php   include 'components\nav.php'; ?>               
        </div>
        <div class="main">
          <section>
           <h2>Our Vision</h2>
          <h3> 
          To become a premier seafood exporter & local distributor by delivering the finest quality seafood to the global & local market place.
          </h3>
          </section>

          <section>
          <h2> Our Mission</h2>
          <h3>365 SeaFood(Pvt) Ltd., aims at offering the best seafood experience with high quality, 
           large range of seafood to maximize the satisfaction of its stakeholders with finest grading,
            packaging and product innovation while preserving the environment and facilitating a better standards of living to the employees. 
            </h3>
            </section>
            <!-- <?php //include 'components\dep1.php';?> -->
  

        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63330.5922031396!2d79.80415487846845!3d7.222353954949966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e94fe88fcc87%3A0x19fa384a5cd397a!2sNegombo%20Fish%20Market!5e0!3m2!1sen!2slk!4v1701886062426!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
        </div>
        <div class="footer">
        <?php   include 'components\footer.php'; ?>
        </div>
    </div>
</body>
</html>
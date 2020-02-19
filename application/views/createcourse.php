<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name='keywords' content='Codac, E-learning,favourite courses' />
 <meta name='description' content='E-learning site, where registered students learn there favourite courses at their own pace' />
 <meta property="og:title" content="Codac | E-learning,favourite courses" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="">
 <meta property="og:url" content="" />
 <meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />
 <meta name="twitter:card" content="">
 <meta name="twitter:site" content="">
 <meta name="twitter:creator" content="">
 <meta name="twitter:url" content="">
 <meta name="twitter:title" content="Codac | E-learning,favourite courses">
 <meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
 <meta name="twitter:image" content="">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/createcourse.css">
 <title>Codac | CREATE COURSE</title>
</head>

<body>
 <section class="header-nav">
  <div class="header-nav__bg">
   <span class="header-nav__toggle">
    <a href="index.html">
     <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="logo">
    </a>
   </span>
  </div>
 </section>

 <section class="courseupload">
  <h2>Upload a course</h2>

  <form class="mt-5 form">
   <div class="form-group">
    <input type="file" class="p-3 form-control-file" id="exampleFormControlFile1">
   </div>
   <div class="form-group">
    <label for="title">Course Title</label>
    <input type="text" name="title" id="title" class="form-control form-control-lg">
   </div>
   <div class="form-group">
    <label for="description">Course Description</label>
    <textarea class="form-control" name="description" id="description" placeholder="Write about course..."></textarea>
   </div>
   <input type="submit" value="Upload Course" class="py-3 btn btn-lg btn-block btn-outline-success">
  </form>
 </section>

 <hr class="bottom-border">
</body>
</html>
<!-- Done By: Wilson, Faris -->

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Redirecting...</title>
   </head>

   <body>

<div class="loader">
     <div class="loading"></div>
            <h3>One moment while we prepare checkout ...</h3>
</div>

<style>
  .loading{
    width: 10rem;
    height: 10rem;
    display: inline-block;
    /* border: 3px solid rgba(255,255,255,0.3); */
    border: 3px solid grey;
    border-radius: 50%;
    border-top-color: white;
    margin-bottom: 1rem;
    margin-top: 10rem;
    animation: 1s spin infinite ease-in-out;
  }

  .loader{
    text-align: center;
  }

  .loading h3{
    font-weight: lighter;
    font-family: 'Helvetica Neue', sans-serif;
    letter-spacing: 1px;
  }

  @keyframes spin{
    to{
      transform: rotate(360deg);
    }
  }

  </style>

<script>
setTimeout(function(){
            window.location.href = "invoice.php";
         }, 5000);
</script>

   </body>
</html>

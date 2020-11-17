
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
  function call(){

              Swal.fire({
                  title:"confirmation.",
                  text: "Are you sure you have received your order....",
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes,Received'
                }).then((result) => {
                  if (result.value) {  
                  window.code= '<?=$_GET['code']?>';   
                    window.location.href = "order_delivered.php"+"?value="+code;;    
                        
                  }
                 
                })

    }
      
  </script>

</head>
<body >
    <script>call();</script>


</body>
</html>

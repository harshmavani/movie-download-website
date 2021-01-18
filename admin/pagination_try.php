<?php
 
include 'Paginator.class.php';

//create a connection to mysql
  $conn       = new mysqli('localhost','root', '','wordpress_db' );

  //DEFINE LIMIT for PER PAGE now 25 is page limit
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
  
  //DEFAULT PAGE NUMBER if No page in url
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
  
  //Number of frequency links to show at one time ; 
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
   
   //your query here in query varriable
    $query  = "Select * from wp_posts  ";
 
 //create a paging class object with connection and query parameters
    $Paginator  = new Paginator( $conn, $query );
 
 //get the results from paginator class
    $results    = $Paginator->getData( $limit, $page ); 
     ?>
<table class="table table-striped">
              <thead>
                <tr>
               
                  <th>Customer Id</th>

                 
                </tr>
              </thead>
              <tbody>
        <?php
       
        if(isset($results) && count( $results->data ) > 0){
         
         for( $i = 0; $i < count( $results->data ); $i++ ) { ?>
        <tr>
                <td><?php echo $results->data[$i]['ID']; ?></td>

        </tr>

        <?php }
        } ?>

               
              </tbody>
            </table>
            <p><?php echo $Paginator->createLinks( $links, $class="pagination"); ?></p>

<!-- <script type="text/javascript">
  
    window.location.assign("https://www.w3schools.com")

</script> -->
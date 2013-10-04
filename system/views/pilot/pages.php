<h1><?php get_page_title(); ?></h1>

<?php
global $DBH;
try 
{  
	# using the shortcut ->query() method here since there are no variable  
	# values in the select statement.  
	$STH = $DBH->query('SELECT id, title, dateUpdated, slug, viewFile FROM shdw_pages');  
	  
	# setting the fetch mode  
	$STH->setFetchMode(PDO::FETCH_ASSOC);  
	?>
    
    <div class="row">
        	<div class="small-12 columns">
            	<a href="<?php echo SITE_URL; ?>admin/pilot/pages/new-page" type="button" class="btn btn-default btn-small mbs">+Add New Page</a>
            	<table class="table table-hover table-condensed">
                  <thead>
                    <tr>
                    	<th width="50">Id</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>View File</th>
                      <th width="150">Date Last Updated</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($row = $STH->fetch()):  ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['title']; ?> </td>
                          <td><?php echo '/'.$row['slug']; ?> </td>
                          <td><?php echo $row['viewFile']; ?> </td>
                          <td><?php echo date("m/d/y g:i A", strtotime( $row['dateUpdated'] ) ); ?>  </td>
                        </tr>
                    <?php endwhile; ?>  
                  </tbody>
                </table>
            </div><!-- en small-12 columns -->
        </div><!-- end row -->

<?php }  
catch(PDOException $e) {  
	exceptionHandler( $e ); 
} 

?>
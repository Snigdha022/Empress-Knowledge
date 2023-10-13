<?php
function get_user_count(){

$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "CSE3100"; 
		
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 

		$user_count="";
        $query = "select count(*) as user_count from users"; 	
        $query_run=mysqli_query($conn, $query);		
		
		
		 
			
			while($row = mysqli_fetch_assoc( $query_run)){
                $user_count=$row['user_count'];
            }
            return($user_count);
}  
function get_book_count(){

    $servername = "localhost"; 
            $username = "root"; 
            $password = "";
            $dbname = "CSE3100"; 
            
            // Create connection 
            $conn = mysqli_connect($servername, $username, $password, $dbname); 
            // Check connection 
            if(!$conn) 
            { 
                die("Connection failed: " . mysqli_connect_error()); 
            } 
    
            $book_count="";
            $query = "select count(*) as book_count from books"; 	
            $query_run=mysqli_query($conn, $query);		
            
            
             
                
                while($row = mysqli_fetch_assoc( $query_run)){
                    $book_count=$row['book_count'];
                }
                return($book_count);
    } 
    function get_category_count(){

        $servername = "localhost"; 
                $username = "root"; 
                $password = "";
                $dbname = "CSE3100"; 
                
                // Create connection 
                $conn = mysqli_connect($servername, $username, $password, $dbname); 
                // Check connection 
                if(!$conn) 
                { 
                    die("Connection failed: " . mysqli_connect_error()); 
                } 
        
                $category_count="";
                $query = "select count(*) as category_count from category"; 	
                $query_run=mysqli_query($conn, $query);		
                
                
                 
                    
                    while($row = mysqli_fetch_assoc( $query_run)){
                        $category_count=$row['category_count'];
                    }
                    return($category_count);
        }  
        function get_author_count(){

            $servername = "localhost"; 
                    $username = "root"; 
                    $password = "";
                    $dbname = "CSE3100"; 
                    
                    // Create connection 
                    $conn = mysqli_connect($servername, $username, $password, $dbname); 
                    // Check connection 
                    if(!$conn) 
                    { 
                        die("Connection failed: " . mysqli_connect_error()); 
                    } 
            
                    $author_count="";
                    $query = "select count(*) as author_count from authors"; 	
                    $query_run=mysqli_query($conn, $query);		
                    
                    
                     
                        
                        while($row = mysqli_fetch_assoc( $query_run)){
                            $author_count=$row['author_count'];
                        }
                        return($author_count);
            }  
            function get_issuedbooks_count(){

                $servername = "localhost"; 
                        $username = "root"; 
                        $password = "";
                        $dbname = "CSE3100"; 
                        
                        // Create connection 
                        $conn = mysqli_connect($servername, $username, $password, $dbname); 
                        // Check connection 
                        if(!$conn) 
                        { 
                            die("Connection failed: " . mysqli_connect_error()); 
                        } 
                
                        $issuedbooks_count="";
                        $query = "select count(*) as issuedbooks_count from issued_books"; 	
                        $query_run=mysqli_query($conn, $query);		
                        
                        
                         
                            
                            while($row = mysqli_fetch_assoc( $query_run)){
                                $issuedbooks_count=$row['issuedbooks_count'];
                            }
                            return($issuedbooks_count);
                }                                    


?>
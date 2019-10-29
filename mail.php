<?php

if(isset($_POST['submit']))
{

// Reads in a file (eml) a user has inputted
function eml_read_in()
{

    $file_ext = stristr($_FILES['upload']['name'], '.');
    
    // If it is an eml file
    if($file_ext == '.eml')
    {
    
        // Define vars
        $dir = 'eml/';
        $file = $dir.basename($_FILES['upload']['name']);
        $carry = 'yes';
        
        // Try and upload the file
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $file))
        {
        
            // Now attempt to read the file
            if($eml_file = file($file))
            {
            
                // Create the array to store preliminary headers
                $headers = array();
                $body = '';
                $ii = -1;

                
                // For every line, carry out this loop
                foreach($eml_file as $key => $value)
                {
                
                    $pattern = '^<html>';
                    
                    if(((eregi($pattern, $value)))||($carry == 'no'))
                    {
                    
                        // Stop putting data into the $headers array
                        $carry = 'no';
                        $i++;
                        $body .= $value;
                        
                    }
                    
                    else
                    {    
                        
                        // Separate each one with a colon
                        if(($eml_file_expl = explode(':', $value))&&($carry == 'yes'))
                        {

                        
                            // The row has been split in half at least...
                            if(isset($eml_file_expl[1]))
                            {
        
                                // Put it into the preliminary headers
                                $headers[$eml_file_expl[0]] = $eml_file_expl[1];
                            
                                // There might be more semicolons in it...
                                for($i=2;$i<=$count;$i++)
                                {
                            
                                    // Add the other values to the header
                                    $headers[$eml_file_expl[0]] .= ':'.$eml_file_expl[$i];
                                    
                                }
                            
                            }    
                            
                        }        
                    
                    }
                    
                }
                
                // Clear up the headers array
                $eml_values = array();
                $eml_values[to] = $headers[To];
                $eml_values[from] = $headers[From];
                $eml_values[subject] = $headers[Subject];
                $eml_values['reply-to'] = $headers['Reply-To'];
                $eml_values['content-type'] = $headers['Content-Type'];
                $eml_values[body] = $body;
                
                unlink($file);
        
                return $eml_values;
                
                
                        
            }
            
        }
        
        else
        {
        
            return '<p>File not uploaded - there was an error</p>';
                        
        }
        
    }
    
}
}    

// Takes information automatically from the $_FILES array...
$eml_pattern = eml_read_in()

// Headers definable...through eml_read_in() again, but I'm guessing they'll be the same for each doc...

mail($eml_pattern[to], $eml_pattern[subject], $eml_pattern[content], $headers) ;
echo 'Mail Sent';

?>
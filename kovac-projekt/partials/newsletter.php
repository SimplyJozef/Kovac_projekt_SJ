<div class="col-lg-6 offset-lg-6">
                    <h4>Subscribe To Our Newsletter</h4>
                    <form id="subscribe" action="newsletter/insert-delete.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Type your email..." required=""> 
                                <button type="submit" id="form-submit" class="text-button" name="form-submit">
                                    Subscribe 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" id="form-delete" class="text-button" name="form-delete" style="position: relative; padding-left: 20px; text-decoration: underline; color: red;">
                                    Unsubscribe            
                                </button>
                            </div>
                        </div> 
                        
                                          
                    </form>
                </div>
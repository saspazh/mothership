<div class="row">
          <div class="col-lg-12">
            
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form role="form" action='<? echo site_url()?>admin_customer/editsave' method='post'>
			  
			  <input name='id' readonly type='hidden' value='<? echo $db->id_customer ?>'>
              
              <div class="form-group">
                <label>Type</label>
                <input class="form-control" readonly value='<? echo $this->uri->segment(3) ?>' name='type' placeholder="Type">
              </div>
			  
			  <div class="form-group">
                <label>First name</label>
                <input class="form-control" name='first' value='<? echo $db->first_name ?>' placeholder="First name">
              </div>
			  
			  <div class="form-group">
                <label>Last name</label>
                <input class="form-control" name='last' value='<? echo $db->last_name ?>' placeholder="Last Name">
              </div>
			  
			  <div class="form-group">
                <label>Address 1</label>
                <textarea name='address1' class="form-control" rows="3"><? echo $db->address1 ?></textarea>
              </div>
			  
			  <div class="form-group">
                <label>City</label>
                <input class="form-control" name='city' value='<? echo $db->city ?>' placeholder="City">
              </div>
			  
			  <div class="form-group">
                <label>Province</label>
                <input class="form-control" name='province' value='<? echo $db->province ?>' placeholder="Province">
              </div>
			  
			  <div class="form-group">
                <label>Mobile</label>
                <input class="form-control" name='mobile' value='<? echo $db->no_hp ?>' placeholder="ex. +628120000000">
              </div>
			  
			  <div class="form-group">
                <label>Email</label>
                <input class="form-control" name='email' value='<? echo $db->email ?>' type='email' placeholder="ex. name@mail.com">
              </div>
			  
			  <div class="form-group">
                <label>News</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name='receive' value='1' <? if($db->receive == 1){ echo 'checked';}else{} ?> >
                    Receive
                  </label>
                </div>
              </div>

<!--
              <div class="form-group">
                <label>Static Control</label>
                <p class="form-control-static">email@example.com</p>
              </div>

              <div class="form-group">
                <label>File input</label>
                <input type="file">
              </div>

              <div class="form-group">
                <label>Text area</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label>Checkboxes</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Checkbox  1
                  </label>
                </div>
               <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Checkbox  2
                  </label>
                </div>
               <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Checkbox  3
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label>Inline Checkboxes</label>
                <label class="checkbox-inline">
                  <input type="checkbox"> 1
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox"> 2
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox"> 3
                </label>
              </div>

              <div class="form-group">
                <label>Radio Buttons</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Radio  1
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Radio  2
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                    Radio  3
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label>Inline Radio Buttons</label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked> 1
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2"> 2
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3"> 3
                </label>
              </div>

              <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <label>Multiple Selects</label>
                <select multiple class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
-->
              <button type="submit" class="btn btn-default">Submit Button</button>
              <button type="reset" class="btn btn-default">Reset Button</button>  

            </form>

          </div>
        
		</div><!-- /.row -->

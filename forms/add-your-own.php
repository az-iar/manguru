<form action="<?php echo site_url( 'manners/add-your-own') ?>" id="add-your-own-form" method="post" role="form">
    <div class="row">
       <div class="col-xs-6">
           <div class="form-group">
               <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
           </div>
           <div class="form-group">
               <input type="email" name="email" id="email" class="form-control" placeholder="Email">
           </div>
           <div class="form-group">
               <select name="country" id="country" class="form-control">
                   <option value="">Country</option>
                   <option value="1">Malaysia</option>
                   <option value="2">Singapore</option>
                   <option value="3">Thailand</option>
                   <option value="4">Vietnam</option>
               </select>
           </div>
           <div class="form-group">
               <select name="category" id="category" class="form-control">
                   <option value="">Category</option>
                   <option value="1">Malaysia</option>
                   <option value="2">Singapore</option>
                   <option value="3">Thailand</option>
                   <option value="4">Vietnam</option>
               </select>
           </div>
           <div class="form-group">
               <select name="department" id="department" class="form-control">
                   <option value="">Department</option>
                   <option value="1">Malaysia</option>
                   <option value="2">Singapore</option>
                   <option value="3">Thailand</option>
                   <option value="4">Vietnam</option>
               </select>
           </div>
       </div>
       <div class="col-xs-6">
           <textarea name="message" id="message" cols="30" rows="11" class="form-control" placeholder="Please type your message here"></textarea>
       </div>
    </div>
    <div class="row">
       <div class="col-xs-12">
           <button class="btn btn-default" type="submit">Submit</button>
       </div>
    </div>
</form>
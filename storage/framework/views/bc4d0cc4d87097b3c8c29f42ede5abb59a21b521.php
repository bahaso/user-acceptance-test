<?php $__env->startSection('content'); ?>
<div class="box">
        <div class="box-header with-border">
           <h3 class="box-title">
           Feature : <select class="/&quot;form-control&quot;" onchange="change_url()" id="feature_position">
           <option value="95">Miscellaneous Case</option><option value="96" selected="">Order Case</option><option value="97">Payment Options</option>			 
           </select>
           </h3>
           <div class="box-tools pull-right">
           <a class="btn btn-link" href="https://uat.dev.bahaso.com/feature/manage/Z9ehuVHMORqtp6n190411"><i class="fa fa-chevron-left"></i> Back
             </a>


               <button class="btn btn-default" onclick="bottomFunction()"><i class="fa fa-angle-down"></i> Go to Bottom
               </button>


               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add" title="Add Data"><i class="fa fa-plus"></i> Add Action
             </button>
           </div>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
           <table class="table table-bordered table-hover">
             <thead>
             <tr>
             <td width="3%"> No</td>
               <td width="7%"> Action
               </td><td width="90%">List of Case              
             </td></tr>
             </thead>
             <tbody>
               
             <tr>
    
                 <td width="5%"> 1
                 <br><a href="https://uat.dev.bahaso.com/action/move/550/1/2/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-down"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-success">positive</label>
              <h3> Order (Sudah Punya Akun)</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/550/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Order (Sudah Punya Akun)?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('550', 'Order (Sudah Punya Akun)')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('550', 'Order (Sudah Punya Akun)','positive')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User sudah memiliki akun bahaso</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('979','Order (Sudah Punya Akun)','<p>Pre-Condition :</p><ol><li>User sudah memiliki akun bahaso</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/979/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>User mengklik Beli Sekarang</p>					</td>
                 <td>
                 <p>User akan dialihkan menuju halaman dimana user dapat memilih metode pembayaran</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('980','Order (Sudah Punya Akun)','<p>User mengklik Beli Sekarang</p>','<p>User akan dialihkan menuju halaman dimana user dapat memilih metode pembayaran</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/980/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 3					</td>
                 <td>
                 <p>User memilih metode pembayaran yang diinginkan</p>					</td>
                 <td>
                 <p>User akan dialihkan ke sebuah halaman dimana User dapat melakukan pendaftaran akun bahaso atau masuk ke akun yang sudah dimiliki.</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('981','Order (Sudah Punya Akun)','<p>User memilih metode pembayaran yang diinginkan</p>','<p>User akan dialihkan ke sebuah halaman dimana User dapat melakukan pendaftaran akun bahaso atau masuk ke akun yang sudah dimiliki.</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/981/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 4					</td>
                 <td>
                 <p>User mengklik Link Login</p>					</td>
                 <td>
                 <p>User akan dialihkan ke halaman dimana user dapat melakukan login</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('982','Order (Sudah Punya Akun)','<p>User mengklik Link Login</p>','<p>User akan dialihkan ke halaman dimana user dapat melakukan login</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/982/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 5					</td>
                 <td>
                 <p>User mengisi email dan password akun bahaso mereka</p>					</td>
                 <td>
                 <p>User akan dialihkan menuju detail transaksi yang akan dilakukan</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('983','Order (Sudah Punya Akun)','<p>User mengisi email dan password akun bahaso mereka</p>','<p>User akan dialihkan menuju detail transaksi yang akan dilakukan</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/983/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 6					</td>
                 <td>
                 <p>User melanjutkan Transaksi sesuai dengan instruksi</p>					</td>
                 <td>
                 <p>User akan mendapatkan notifikasi bahwa transaksi telah sukses</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('984','Order (Sudah Punya Akun)','<p>User melanjutkan Transaksi sesuai dengan instruksi</p>','<p>User akan mendapatkan notifikasi bahwa transaksi telah sukses</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/984/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
      
             <tr>
    
                 <td width="5%"> 2
                 <br><a href="https://uat.dev.bahaso.com/action/move/551/2/1/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-up"></i></a><a href="https://uat.dev.bahaso.com/action/move/551/2/3/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-down"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-success">positive</label>
              <h3> Order (Belum Punya Akun)</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/551/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Order (Belum Punya Akun)?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('551', 'Order (Belum Punya Akun)')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('551', 'Order (Belum Punya Akun)','positive')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User belum&nbsp;memiliki akun bahaso</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('985','Order (Belum Punya Akun)','<p>Pre-Condition :</p><ol><li>User belum&nbsp;memiliki akun bahaso</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/985/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>User mengklik Beli Sekarang</p>					</td>
                 <td>
                 <p>User akan dialihkan menuju halaman dimana user dapat memilih metode pembayaran</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('986','Order (Belum Punya Akun)','<p>User mengklik Beli Sekarang</p>','<p>User akan dialihkan menuju halaman dimana user dapat memilih metode pembayaran</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/986/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 3					</td>
                 <td>
                 <p>User memilih metode pembayaran yang diinginkan</p>					</td>
                 <td>
                 <p>User akan dialihkan ke sebuah halaman dimana User dapat melakukan pendaftaran akun bahaso atau masuk ke akun yang sudah dimiliki.</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('987','Order (Belum Punya Akun)','<p>User memilih metode pembayaran yang diinginkan</p>','<p>User akan dialihkan ke sebuah halaman dimana User dapat melakukan pendaftaran akun bahaso atau masuk ke akun yang sudah dimiliki.</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/987/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 4					</td>
                 <td>
                 <p>User mengisi E-mail, Username, dan Password untuk membuat akun bahaso</p>					</td>
                 <td>
                 <p>User akan dialihkan menuju detail transaksi yang akan dilakukan</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('988','Order (Belum Punya Akun)','<p>User mengisi E-mail, Username, dan Password untuk membuat akun bahaso</p>','<p>User akan dialihkan menuju detail transaksi yang akan dilakukan</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/988/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 5					</td>
                 <td>
                 <p>User melanjutkan Transaksi sesuai dengan instruksi</p>					</td>
                 <td>
                 <p>User akan mendapatkan notifikasi bahwa transaksi telah sukses</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('989','Order (Belum Punya Akun)','<p>User melanjutkan Transaksi sesuai dengan instruksi</p>','<p>User akan mendapatkan notifikasi bahwa transaksi telah sukses</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/989/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
      
             <tr>
    
                 <td width="5%"> 3
                 <br><a href="https://uat.dev.bahaso.com/action/move/637/3/2/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-up"></i></a><a href="https://uat.dev.bahaso.com/action/move/637/3/4/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-down"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-success">positive</label>
              <h3> Voucher Code Redeem</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/637/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Voucher Code Redeem?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('637', 'Voucher Code Redeem')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('637', 'Voucher Code Redeem','positive')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User berada di menu metode pembayaran</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1088','Voucher Code Redeem','<p>Pre-Condition :</p><ol><li>User berada di menu metode pembayaran</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1088/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>User memasukkan Kode Voucher yang dimiliki</p>					</td>
                 <td>
                 <p>Field Voucher Code dapat menerima input dari user.</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1089','Voucher Code Redeem','<p>User memasukkan Kode Voucher yang dimiliki</p>','<p>Field Voucher Code dapat menerima input dari user.</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1089/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 3					</td>
                 <td>
                 <p>User mengklik button Tukar</p>					</td>
                 <td>
                 <p>Harga yang ditampilkan di rincian pembayaran akan dipotong sesuai dengan nominal diskon yang digunakan</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1090','Voucher Code Redeem','<p>User mengklik button Tukar</p>','<p>Harga yang ditampilkan di rincian pembayaran akan dipotong sesuai dengan nominal diskon yang digunakan</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1090/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
      
             <tr>
    
                 <td width="5%"> 4
                 <br><a href="https://uat.dev.bahaso.com/action/move/638/4/3/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-up"></i></a><a href="https://uat.dev.bahaso.com/action/move/638/4/5/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-down"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-danger">negative</label>
              <h3> Voucher Code Redeem (Invalid)</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/638/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Voucher Code Redeem (Invalid)?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('638', 'Voucher Code Redeem (Invalid)')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('638', 'Voucher Code Redeem (Invalid)','negative')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User berada di menu metode pembayaran</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1091','Voucher Code Redeem (Invalid)','<p>Pre-Condition :</p><ol><li>User berada di menu metode pembayaran</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1091/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>User memasukkan Kode Voucher invalid yang dimiliki</p>					</td>
                 <td>
                 <p>Field Voucher Code dapat menerima input dari user.</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1092','Voucher Code Redeem (Invalid)','<p>User memasukkan Kode Voucher invalid yang dimiliki</p>','<p>Field Voucher Code dapat menerima input dari user.</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1092/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 3					</td>
                 <td>
                 <p>User mengklik button Tukar</p>					</td>
                 <td>
                 <p>Akan muncul sebuah error yang menyatakan bahwa kode voucher invalid</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1093','Voucher Code Redeem (Invalid)','<p>User mengklik button Tukar</p>','<p>Akan muncul sebuah error yang menyatakan bahwa kode voucher invalid</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1093/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
      
             <tr>
    
                 <td width="5%"> 5
                 <br><a href="https://uat.dev.bahaso.com/action/move/641/5/4/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-up"></i></a><a href="https://uat.dev.bahaso.com/action/move/641/5/6/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-down"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-success">positive</label>
              <h3> Change Package</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/641/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Change Package?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('641', 'Change Package')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('641', 'Change Package','positive')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User berada di menu metode pembayaran</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1095','Change Package','<p>Pre-Condition :</p><ol><li>User berada di menu metode pembayaran</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1095/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>User mengklik Ganti Paket.</p>					</td>
                 <td>
                 <p>User akan dialihkan kembali ke halaman utama webads, dimana user dapat memilih paket yang diinginkan</p>					</td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1096','Change Package','<p>User mengklik Ganti Paket.</p>','<p>User akan dialihkan kembali ke halaman utama webads, dimana user dapat memilih paket yang diinginkan</p>','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1096/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
      
             <tr>
    
                 <td width="5%"> 6
                 <br><a href="https://uat.dev.bahaso.com/action/move/697/6/5/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-up"></i></a><a href="https://uat.dev.bahaso.com/action/move/697/6/7/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-down"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-success">positive</label>
              <h3> Order (No Account, Facebook)</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/697/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Order (No Account, Facebook)?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('697', 'Order (No Account, Facebook)')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('697', 'Order (No Account, Facebook)','positive')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User belum&nbsp;memiliki akun bahaso</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1174','Order (No Account, Facebook)','<p>Pre-Condition :</p><ol><li>User belum&nbsp;memiliki akun bahaso</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1174/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>Sama Dengan register biasa, tapi menggunakan Facebok Account</p>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1176','Order (No Account, Facebook)','<p>Sama Dengan register biasa, tapi menggunakan Facebok Account</p>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1176/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
      
             <tr>
    
                 <td width="5%"> 7
                 <br><a href="https://uat.dev.bahaso.com/action/move/698/7/6/96/Z9ehuVHMORqtp6n190411" class="btn btn-info btn-xs"> <i class="fa fa-chevron-up"></i>
                 </a></td>
              <td width="10%">	
                                 <label class="label label-success">positive</label>
              <h3> Order (No Account, Google Register)</h3>
              <a href="https://uat.dev.bahaso.com/action/delete/698/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Order (No Account, Google Register)?')">
               <i class="fa fa-trash"></i>
               </a>
               <button class="btn btn-info btn-sm" onclick="callModal('698', 'Order (No Account, Google Register)')">
               <i class="fa fa-edit"></i>
               </button>
     
             </td>
               <td width="85%">
               
               <button class="btn btn-primary" onclick="callModal2('698', 'Order (No Account, Google Register)','positive')"> <i class="fa fa-plus"> </i> Add Case </button>
               <br>				 
              <table class="table table-striped table-bordered" width="100%">
                 <thead>
                 <tr>
                 <th width="5%">
                 No
                 </th>
                 <th width="32%">
                 Case
                 </th>
                 <th width="32%">
                 Expectation
                 </th>
                 <th width="10%">
                 Type
                 </th>
                 <th width="10%">
                 Important
                 </th>
                 <th width="11">
             
                 </th>
                 </tr>
                 </thead>
                 <tbody>
                                     
                 <tr>
                 <td>
                 1					</td>
                 <td>
                 <p>Pre-Condition :</p><ol><li>User belum&nbsp;memiliki akun bahaso</li></ol>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1175','Order (No Account, Google Register)','<p>Pre-Condition :</p><ol><li>User belum&nbsp;memiliki akun bahaso</li></ol>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1175/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     
                 <tr>
                 <td>
                 2					</td>
                 <td>
                 <p>Sama Dengan register biasa, tapi menggunakan Google Account</p>					</td>
                 <td>
                                     </td>
                 <td>
                 Rule Test					</td>
                 <td>
                 important					</td>
                 <td>
                 
                 <button class="btn btn-primary btn-sm" onclick="callModal3('1177','Order (No Account, Google Register)','<p>Sama Dengan register biasa, tapi menggunakan Google Account</p>','','Rule Test','important')">
               <i class="fa fa-pencil"></i>
               </button>
                 
                 <a href="https://uat.dev.bahaso.com/listcase/delete/1177/96/Z9ehuVHMORqtp6n190411" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this case ?')">
               <i class="fa fa-trash"></i>
               </a>
             
             
                 </td>
                 </tr>
                                     </tbody>
               </table>
                                 </td>
                           
            </tr>
             
                     
             </tbody>
             <tfoot>
             <tr>
               </tr><tr>
               <th> No</th>
               <th> Action</th>
            
               <th> List Case</th>
             </tr>
             
             </tfoot>
           </table>
         </div>
         </div>
         <!-- /.box-body -->
       </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-lg-7">
             <div class="card o-hidden border-0 shadow-lg my-5">
                 <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <?= form_open('auth/cek_regis') ?>
                     <div class="row">
                         <div class="col-lg">
                             <div class="p-5">
                                 <div class="text-center">
                                     <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                                 </div>
                                 <form class="user">
                                     <div class="form-group row">
                                         <div class="col-sm-12">
                                             <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Lengkap">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-sm-12">
                                             <input type="text" name="email" class="form-control form-control-user" placeholder="Alamat Email">
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-sm-6">
                                             <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                         </div>
                                         <div class="col-sm-6">
                                             <input type="password" class="form-control form-control-user" placeholder="Ulangi Password">
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary btn-user btn-block">
                                         Daftar Akun
                                     </button>
                                 </form>
                                 <hr>
                                 <div class="text-center">
                                     <a class="small" href="login.html">Sudah Punya Akun? Login!</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?= form_close(); ?>
                 </div>
             </div>
         </div>
     </div>
 </div>

 </body>

 </html>
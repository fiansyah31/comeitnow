<?= $this->extend('layout_dashboard/template'); ?>

<?= $this->section('content'); ?>  
          <!-- Page content-->
          <div class="page-content">
            <div class="container-fluid">
                <h1 class="mt-4 title-dashboard">Transaksi saya</h1>
                <div class="mt-5">
                  <div class="row">
                    <div class="col-12">
                        <table id="example" class="table table-table table-borderless" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Template</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Tanggal Pembelian</th>                              
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
    <?= $this->endSection(); ?>
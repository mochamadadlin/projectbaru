<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Customer</title>
</head>
<body>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e($message); ?>

                </div>
            <?php elseif($message =  Session::get('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e($message); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    Data Customer
                </div>
                <div class="card-body">
                    <div class="button-action" style="margin-bottom: 20px">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                            IMPORT
                        </button>
                        <a href="" class="btn btn-primary btn-md">EXPORT</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                            <tr>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Cabang</th>
                                <th scope="col">Jumlah Kendaraan</th>
                                <th scope="col">Usia Service</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($customer->cust_id); ?></td>
                                    <td><?php echo e($customer->bulan); ?></td>
                                    <td><?php echo e($customer->buyer); ?></td>
                                    <td><?php echo e($customer->notelp_buyer); ?></td>
                                    <td><?php echo e($customer->noktp_buyer); ?></td>
                                    <td><?php echo e($customer->tgl_lahir); ?></td>
                                    <td><?php echo e($customer->alamat); ?></td>
                                    <td><?php echo e($customer->kecamatan); ?></td>
                                    <td><?php echo e($customer->kota); ?></td>
                                    <td><?php echo e($customer->noka_1); ?></td>
                                    <td><?php echo e($customer->type); ?></td>
                                    <td><?php echo e($customer->no_polisi); ?></td>
                                    <td><?php echo e($customer->stnk_date); ?></td>
                                    <td><?php echo e($customer->type_penjualan); ?></td>
                                    <td><?php echo e($customer->sales); ?></td>
                                    <td><?php echo e($customer->spv); ?></td>
                                    <td><?php echo e($customer->tanggal_do); ?></td>
                                    <td><?php echo e($customer->last_service); ?></td>
                                    <td><?php echo e($customer->next_service); ?></td>
                                    <td><?php echo e($customer->first_service); ?></td>
                                    <td><?php echo e($customer->usia_kendaraan); ?></td>
                                    <td><?php echo e($customer->usia_service); ?></td>
                                    <td><?php echo e($customer->status_service); ?></td>
                                    <td><?php echo e($customer->status_asuransi); ?></td>
                                    <td><?php echo e($customer->nama_asuransi); ?></td>
                                    <td><?php echo e($customer->tgl_berakhirasuransi); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('customers.import')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>
</body>
</html><?php /**PATH /Users/wijayatoyota/Documents/techtool-laravel-admin/resources/views/customers.blade.php ENDPATH**/ ?>
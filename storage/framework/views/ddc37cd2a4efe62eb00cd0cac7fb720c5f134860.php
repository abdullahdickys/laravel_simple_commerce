<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(url('history')); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(url('history')); ?>">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong> dengan nominal : <strong>Rp. <?php echo e(number_format($pesanan->kode+$pesanan->jumlah_harga)); ?></strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    <?php if(!empty($pesanan)): ?>
                    <p align="right">Tanggal Pesan : <?php echo e($pesanan->tanggal); ?></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $pesanan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td>
                                    <img src="<?php echo e(url('uploads')); ?>/<?php echo e($pesanan_detail->barang->gambar); ?>" width="100" alt="...">
                                </td>
                                <td><?php echo e($pesanan_detail->barang->nama_barang); ?></td>
                                <td><?php echo e($pesanan_detail->jumlah); ?> kain</td>
                                <td align="right">Rp. <?php echo e(number_format($pesanan_detail->barang->harga)); ?></td>
                                <td align="right">Rp. <?php echo e(number_format($pesanan_detail->jumlah_harga)); ?></td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></td>
                                
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->kode)); ?></strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->kode+$pesanan->jumlah_harga)); ?></strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dr4g0na/Desktop/project/laravel_simple_commerce/resources/views/history/detail.blade.php ENDPATH**/ ?>
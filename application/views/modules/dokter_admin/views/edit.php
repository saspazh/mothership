
        <form method="post" action="<? echo site_url()?>/dokter_admin/edit" class="form" id="form">

            <fieldset>
                <legend>Edit Siswa</legend>
                        <input type="hidden" readonly  style="width: 30%;"  id="50" value="<? echo $db->id_dokter?>" name="id_siswa" class="text">
                     <p class="inline-small-label">
                        <label for="field5">Nama *</label>
                        <input type="text" value="<? echo $db->nama_dokter?>" style="width: 50%;" name="nama" class="text"> </p>
                     <p class="inline-small-label">
                        <label for="field5">NIP *</label>
                        <input type="text" value="<? echo $db->nip?>" style="width: 50%;" name="nip" class="text"> </p>
                     <p class="inline-small-label">
                        <label for="field5">Username</label>
                        <input type="text" value="<? echo $db->username?>" style="width: 50%;" name="username" class="text"> </p>
                     <p class="inline-small-label">
                        <label for="field5">Password</label>
                        <input type="text" value="<? echo $db->password?>" style="width: 50%;" name="password" class="text"> </p>

            </fieldset>

            <div class="block-actions">
                <ul class="actions-right"> <input type="submit" value="-Edit-" class="close-toolbox button"/> </ul>
            </div>
        </form>


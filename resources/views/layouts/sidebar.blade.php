<div class="sidebar">
    <h4 class="text-center text-white">HMS</h4>
    <a href="#">Dashboard</a>
    <a href="{{ route('admin.index') }}">Patients</a>
    <a href="{{ route('admin.doctors.index') }}">Doctors</a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#addUserModal">Add user</a>
    <a href="#">Appointments</a>
    <a href="#">Settings</a>
</div>
<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-control" required>
                            <option value="patient">Patient</option>
                            <option value="nurse">Nurse</option>
                            <option value="doctor">Chemist</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add User</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
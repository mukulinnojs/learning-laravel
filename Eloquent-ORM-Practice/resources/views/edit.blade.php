<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="col-6 ms-auto me-auto mt-5">
        <form action="{{route('update.event')}}" class="modal-content" id="editEventForm" method="post">
            
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="editEventLabel">Edit Event</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" value="{{$data->id}} id="editIndex">
                <div class="mb-3">
                    <label class="form-label">Event Title</label>
                    <input type="text" class="form-control" value="{{$data->title}}" name="title" id="editTitle"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" value="{{$data->date}}" name="date" id="editDate" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" value="{{$data->location}}" name="location"
                        id="editLocation" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Event</button>
                <button type="button" class="btn btn-secondary ms-1" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>


    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
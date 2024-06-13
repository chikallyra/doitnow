<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Create Mission</title>
    <style>
        .list-group-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .list-group-item select,
        .list-group-item input {
            width: 45%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Create Mission</h2>
        <form action="{{ route('step.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Other mission fields -->
            
            <div class="form-group">
                <label for="steps">Steps</label>
                <ul id="steps-list" class="list-group">
                    <!-- Existing steps will be populated here -->
                </ul>
                <button type="button" class="btn btn-primary mt-2" id="add-step">Add Step</button>
            </div>
    
            <button type="submit" class="btn btn-success">Save Mission</button>
        </form>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var stepsList = document.getElementById('steps-list');
        var addStepButton = document.getElementById('add-step');

        // Initialize SortableJS
        var sortable = Sortable.create(stepsList, {
            animation: 150,
            onEnd: function(evt) {
                updateStepOrder();
            }
        });

        // Add new step
        addStepButton.addEventListener('click', function() {
            var newStep = document.createElement('li');
            newStep.className = 'list-group-item';
            newStep.innerHTML = `
                <select class="form-control mb-2">
                    <option value="text">Text</option>
                    <option value="file">File</option>
                    <option value="hidden">None</option>
                    <!-- Add more options for different step types -->
                </select>
                <input type="text" class="form-control mb-2" placeholder="Step description">
                <button type="button" class="btn btn-danger remove-step">Remove</button>
            `;
            stepsList.appendChild(newStep);
            updateStepOrder();
        });

        // Remove step
        stepsList.addEventListener('click', function(evt) {
            if (evt.target.classList.contains('remove-step')) {
                evt.target.closest('li').remove();
                updateStepOrder();
            }
        });

        // Update step order
        function updateStepOrder() {
            var steps = stepsList.querySelectorAll('li');
            steps.forEach((step, index) => {
                var stepTypeSelect = step.querySelector('select');
                stepTypeSelect.name = `steps[${index}][type]`;

                var stepDescriptionInput = step.querySelector('input');
                stepDescriptionInput.name = `steps[${index}][description]`;
            });
        }

        // No toggleDescriptionInput logic needed since inputs are always visible

        // Initialize updateStepOrder on page load
        updateStepOrder();
    });
    </script>

</body>
</html>

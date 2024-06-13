<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <title>Coba Create</title>
</head>
<body>
    
    <div class="container">
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

    // Function to initialize or re-initialize SortableJS
    function initializeSortable() {
        Sortable.create(stepsList, {
            animation: 150,
            onEnd: function(evt) {
                updateStepOrder();
            }
        });
    }

    // Initialize SortableJS on page load
    initializeSortable();

    // Add new step
    addStepButton.addEventListener('click', function() {
        var newStep = document.createElement('li');
        newStep.className = 'list-group-item';
        newStep.innerHTML = `
            <select name="stepType[]" class="form-control mb-2" onchange="toggleDescriptionInput(this)">
                <option value="text">Text</option>
                <option value="file">File</option>
                <option value="hidden">None</option>
                <!-- Add more options for different step types -->
            </select>
            <input type="text" name="stepDescriptions[]" class="form-control mb-2" placeholder="Step description">
            <button type="button" class="btn btn-danger remove-step">Remove</button>
        `;
        stepsList.appendChild(newStep);
        updateStepOrder(); // Update order after adding a new step
        initializeSortable(); // Re-initialize SortableJS
    });

    // Remove step
    stepsList.addEventListener('click', function(evt) {
        if (evt.target.classList.contains('remove-step')) {
            evt.target.closest('li').remove();
            updateStepOrder();
            initializeSortable(); // Re-initialize SortableJS
        }
    });

    // Update step order
    function updateStepOrder() {
        var steps = stepsList.querySelectorAll('li');
        steps.forEach((step, index) => {
            var stepTypeSelect = step.querySelector('select[name="stepType[]"]');
            stepTypeSelect.name = `steps[${index}][type]`;

            var stepDescriptionInput = step.querySelector('input[name="stepDescriptions[]"]');
            stepDescriptionInput.name = `steps[${index}][description]`;
        });
    }

    // Toggle description input based on step type
    window.toggleDescriptionInput = function(selectElement) {
        var descriptionInput = selectElement.nextElementSibling;
        if (selectElement.value === 'hidden') {
            descriptionInput.style.display = 'none';
        } else {
            descriptionInput.style.display = 'block';
        }
    }
});
    </script>

</body>
</html>
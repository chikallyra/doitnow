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
        <form action="{{ route('mission.store') }}" method="POST" enctype="multipart/form-data">
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
            Sortable.create(stepsList, {
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
                    <input type="text" name="steps[]" class="form-control" placeholder="Step description">
                    <button type="button" class="btn btn-danger remove-step">Remove</button>
                `;
                stepsList.appendChild(newStep);
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
                    step.querySelector('input').name = `steps[${index}]`;
                });
            }
        });
    </script>

</body>
</html>
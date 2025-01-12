<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .main-container {
            display: flex;
            position: relative;
            width: 100%;
            height: 100%;
        }
        .generator {
            flex: 1;
            max-width: 300px;
            padding: 20px;
            background: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            height: auto;
            overflow-y: auto;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
        }
        .generator.move-left {
            position: fixed;
            top: 10%;
            left: 10px;
            transform: translateX(0);
        }
        .steps-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 0;
            left: 100%;
            transition: all 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
            opacity: 0;
        }
        .steps-container.active {
            left: 20%;
            opacity: 1;
        }
        .step {
            width: 100%;
            position: relative;
            margin-bottom: 20px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
        }
        .step.active {
            transform: translateX(0);
            opacity: 1;
        }
        .step.inactive {
            transform: translateX(-100%);
            opacity: 0;
        }
        .multi-select-container {
            margin-top: 10px;
        }
        .multi-select-item {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            margin: 5px;
            cursor: pointer;
        }
        .multi-select-item:hover {
            background: #0056b3;
        }
    </style>
    <script>
        let currentStep = 0;
        let steps = [];

        function generateSteps() {
            const numSubjects = document.getElementById('numSubjects').value;
            const numClasses = document.getElementById('numClasses').value;
            const numTeachers = document.getElementById('numTeachers').value;

            if (!numSubjects || !numClasses || !numTeachers) {
                alert('Please fill in all the fields.');
                return;
            }

            const stepsContainer = document.getElementById('stepsContainer');
            stepsContainer.innerHTML = '';
            steps = [];

            // Move generator to the left
            document.querySelector('.generator').classList.add('move-left');
            document.querySelector('.steps-container').classList.add('active');

            // Generate Subjects Step
            const subjectStep = document.createElement('div');
            subjectStep.className = 'step';
            subjectStep.innerHTML = `
                <h5>Manage Subjects</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${Array.from({ length: numSubjects }).map((_, i) => `
                            <tr>
                                <td>${i + 1}</td>
                                <td><input type="text" class="form-control" placeholder="Enter subject name"></td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
                <div class="navigation-buttons">
                    <button class="btn btn-secondary" onclick="previousStep()">Back</button>
                    <button class="btn btn-primary" onclick="nextStep()">Next</button>
                </div>
            `;
            stepsContainer.appendChild(subjectStep);
            steps.push(subjectStep);

            // Generate Classes Step
            const classStep = document.createElement('div');
            classStep.className = 'step';
            classStep.innerHTML = `
                <h5>Manage Classes</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Class Name</th>
                            <th>Subjects</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${Array.from({ length: numClasses }).map((_, i) => `
                            <tr>
                                <td>${i + 1}</td>
                                <td><input type="text" class="form-control" placeholder="Enter class name"></td>
                                <td>
                                    <input type="text" class="form-control subject-input" placeholder="Select subjects">
                                    <div class="multi-select-container"></div>
                                </td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
                <div class="navigation-buttons">
                    <button class="btn btn-secondary" onclick="previousStep()">Back</button>
                    <button class="btn btn-primary" onclick="nextStep()">Next</button>
                </div>
            `;
            stepsContainer.appendChild(classStep);
            steps.push(classStep);

            // Generate Teachers Step
            const teacherStep = document.createElement('div');
            teacherStep.className = 'step';
            teacherStep.innerHTML = `
                <h5>Manage Teachers</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Teacher Name</th>
                            <th>Class</th>
                            <th>Subjects</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${Array.from({ length: numTeachers }).map((_, i) => `
                            <tr>
                                <td>${i + 1}</td>
                                <td><input type="text" class="form-control" placeholder="Enter teacher name"></td>
                                <td>
                                    <input type="text" class="form-control class-input" placeholder="Select classes">
                                    <div class="multi-select-container"></div>
                                </td>
                                <td>
                                    <input type="text" class="form-control subject-input" placeholder="Select subjects">
                                    <div class="multi-select-container"></div>
                                </td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
                <div class="navigation-buttons">
                    <button class="btn btn-secondary" onclick="previousStep()">Back</button>
                    <button class="btn btn-success" onclick="saveData()">Save</button>
                </div>
            `;
            stepsContainer.appendChild(teacherStep);
            steps.push(teacherStep);

            updateStepVisibility();
        }

        function updateStepVisibility() {
            steps.forEach((step, index) => {
                step.classList.remove('active', 'inactive');
                if (index === currentStep) {
                    step.classList.add('active');
                } else if (index < currentStep) {
                    step.classList.add('inactive');
                }
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateStepVisibility();
            }
        }

        function previousStep() {
            if (currentStep > 0) {
                currentStep--;
                updateStepVisibility();
            }
        }

        function saveData() {
            alert('Data saved successfully!');
        }

    </script>
</head>
<body>
    <div class="main-container">
        <div class="generator">
            <h5>Enter Details</h5>
            <div class="mb-3">
                <label for="numSubjects" class="form-label">Number of Subjects</label>
                <input type="number" id="numSubjects" class="form-control" min="1">
            </div>
            <div class="mb-3">
                <label for="numClasses" class="form-label">Number of Classes</label>
                <input type="number" id="numClasses" class="form-control" min="1">
            </div>
            <div class="mb-3">
                <label for="numTeachers" class="form-label">Number of Teachers</label>
                <input type="number" id="numTeachers" class="form-control" min="1">
            </div>
            <button class="btn btn-primary" onclick="generateSteps()">Generate</button>
        </div>

        <div id="stepsContainer" class="steps-container"></div>
    </div>
</body>
</html>

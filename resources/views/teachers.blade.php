<!DOCTYPE html>
<html>
<head><title>Teachers</title></head>
<body>
    <h1>All Teachers and their Subjects</h1>
    <ul id="teachers"></ul>

    <script>
    fetch('/api/teacher-subjects')
        .then(res => res.json())
        .then(data => {
            const ul = document.getElementById('teachers');
            for (let teacherName in data) {
                const li = document.createElement('li');
                const subjects = data[teacherName].map(item => item.subject_name).join(', ');
                li.textContent = `${teacherName} teaches: ${subjects}`;
                ul.appendChild(li);
            }
        });
    </script>
</body>
</html>

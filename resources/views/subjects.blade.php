<!DOCTYPE html>
<html>
<head><title>Vakken</title></head>
<body>
    <h1>Alle Vakken</h1>
    <ul id="vakken"></ul>

    <script>
    fetch('/api/subjects')
        .then(res => res.json())
        .then(data => {
            const ul = document.getElementById('subjects');
            data.forEach(vak => {
                const li = document.createElement('li');
                li.textContent = vak.naam + ' - gegeven door ' + vak.docent.naam;
                ul.appendChild(li);
            });
        });
    </script>
</body>
</html>

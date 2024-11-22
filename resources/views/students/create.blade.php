<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>

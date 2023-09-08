
// Function to calculate age based on birthdate
function calculateAge(birthDate) {
    const currentDate = new Date();
    const birthDateObj = new Date(birthDate);
    let age = currentDate.getFullYear() - birthDateObj.getFullYear();

    // Check if birthday has already occurred this year
    if (
        currentDate.getMonth() < birthDateObj.getMonth() ||
        (currentDate.getMonth() === birthDateObj.getMonth() &&
            currentDate.getDate() < birthDateObj.getDate())
    ) {
        age--;
    }

    return age;
}

// Function to update the HTML element with your age
function updateAgeOnBirthday() {
    const birthDate = '2003-12-17'; // Replace with your actual birthdate (e.g., '1990-01-01')
    const age = calculateAge(birthDate);
    const ageDisplayElement = document.getElementById('ageDisplay');

    ageDisplayElement.textContent = `${age}`;
}

// Call the function to update age when the page loads
window.onload = updateAgeOnBirthday;


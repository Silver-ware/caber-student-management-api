# Pre-final Exam in Application Lifecycle Management (BSIT-3B)

> Pre-requisites
> 
- PHP version must be 8.2 or greater
- git
- [fork this repository](https://github.com/ACLC-Tacloban/student-management-api.git)

### Student Management API

The Student Management API is a tool for managing student data across a variety of systems. It allows for efficient storage, retrieval, and modification of student records. The API could handle data such as student information and academic records.

> **Note:** This may not follow real world database structure (i.e relational) just to simplify things.
> 

### User Stories

1. As a User, I am able to manage student info (register, update, and retrieve with filters).
    - Requirements
        - endpoints
            - `GET /api/students`
            - `POST /api/students`
            - `GET /api/students/{id}`
            - `PATCH /api/students/{id}`
        - Student attributes
            - `string` firstname
            - `string` lastname
            - `string` birthdate *(format: Y-m-d)*
            - `string` sex
                - MALE
                - FEMALE
            - `string` address
            - `int` year
            - `string` course
            - `string` section
    - Acceptance Criteria
        - Implement a seeder
        - Implement filtering
            - sort
            - search
            - limit
            - offset
            - fields
            - year
            - course
            - section
        - Response structure for student
        
        ```json
        {
        	"id": 1,
        	"firstname": "John",
        	"lastname": "Doe",
        	"birthdate": "2001-01-01",
        	"sex": "MALE",
        	"address": "Tacloban",
        	"year": 3,
        	"course": "BSIT",
        	"section": "B"
        }
        ```
        
        - Response structure for students
        
        ```json
        {
        "metadata": [
        		"count": 2,
        		"search": null,
        		"limit": 0,
        		"offset": 5,
        		"fields": []
        	],
        "students": [
        				{...},
        				{...}
        	]
        }
        ```
        
2. As a User, I can manage student’s academic records (add, update, retrieve with filters).
    - Requirements
        - endpoints
            - `GET /api/students/{id}/subjects`
            - `POST /api/students/{id}/subjects`
            - `GET /api/students/{id}/subjects/{subject_id}`
            - `PATCH /api/students/{id}/subjects/{subject_id}`
        - Subject attributes
            - `string` subject_code
            - `string` name
            - `string` description
            - `string` instructor
            - `string` schedule
            - `array` grades
                - `double` prelims
                - `double` midterms
                - `double` pre_finals
                - `double` finals
            - `double` average_grade
            - `string` remarks
                - PASSED ***average_grade ≥ 3.0***
                - FAILED ***average_grade < 3.0***
            - `string` date_taken *(format: Y-m-d)*
    - Acceptance Criteria
        - Implement a seeder
        - `remarks` must be based on the student’s average grade
        - Implement filtering
            - sort
            - search
            - limit
            - offset
            - fields
            - remarks
        - Response structure for subject
        
        ```json
        {
        	"id": 1,
        	"subject_code": "T3B-123",
        	"name": "Application Lifecyle Management",
        	"description": "Lorem ipsum dolor sit amet.",
        	"instructor": "Mr. John Doe",
        	"schedule": "MW 7AM-12PM",
        	"grades": [
        		"prelims": 2.75,
        		"midterms": 2.0,
        		"pre_finals": 1.75,
        		"finals": 1.0
        	],
        	"average_grade": 1.87,
        	"remarks": "PASSED",
        	"date_taken": "2024-01-01",
        }
        ```
        
        - Response structure for subjects
        
        ```json
        {
        "metadata": [
        		"count": 2,
        		"search": null,
        		"limit": 0,
        		"offset": 5,
        		"fields": []
        	],
        "students": [
        				{...},
        				{...}
        	]
        }
        ```
        
    
    > Once you’re done, kindly create a Pull Request to this [repository](https://github.com/ACLC-Tacloban/student-management-api.git) by feature (student-management, subject-management, and student-subject-management [this is the combination of the two]). Provide the necessary details such as the Title and the Description.
    >
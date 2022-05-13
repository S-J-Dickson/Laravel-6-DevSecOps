# DevSecOps
The goal of this repository is creating a CI/CD/CS pipeline using Laravel 6 and GitHub actions.

## How to test it?

So the project is using workflows that trigger on a pull request to the main branch.  I'll give a few options on how you can test the actions that I have created.

### Create Pull Request on this repository

 - Press edit file
 - Add a comment or change some code
 - Press commit and "Create a new branch for this commit"
 - Change base to "main"
 - Submit pull request.
 - See workflows running

### Create a Fork

- Press 'Fork'
- Fork the project into your profile or organisation
 - Add a comment or change some code
 - Press commit and "Create a new branch for this commit"
 - Change base to "main"
 - Submit pull request.
 - See workflows running

### Download the codebase
- Download the project
- git init
- git add .
- git commit -m "DevSecOps"
- git push to private repo
- Go to GitHub and create pull request to main branch
- See workflows running

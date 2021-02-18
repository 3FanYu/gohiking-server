
pipeline {
    agent any
    stages {
        stage('Hello') {
            steps {
                echo 'Hello World'
            }
        }
          stage('Check Env') {
            steps {
                sh 'php --version'
                sh 'composer --version'
            }
        }
         stage('Check Repo') {
            steps {
               git url:'https://github.com/monosparta/gohiking-server.git',branch:'main'
               sh 'ls -a'
            }
        }
        stage('Composer Update'){
            steps{
                sh 'composer update'
            }
        }
        stage('Setup'){
            steps{
                sh 'composer update'
                sh 'cp .env.example .env'
                sh 'cp .env.example .env'
            }
        }
        stage('Test'){
            steps{
                sh 'cp .env.example .env'
            }
        }
    }
}

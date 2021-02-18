
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
                sh'composer --version'
            }
        }
         stage('Check Repo') {
            steps {
               git url:'https://github.com/monosparta/gohiking-server.git',branch:'main'
               sh 'ls -a'
            }
        }
    }
}

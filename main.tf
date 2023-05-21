provider "aws" {
  region = "us-east-2"
}

resource "aws_instance" "web" {
  ami              = "ami-046f6df52d1930356"
  instance_type    = "t2.micro"
  security_groups  = ["default"]  
  user_data        = file("server-script.sh")
  tags = {
    Name = "Production Refund Rangers"
  }

  iam_instance_profile = "EC2CodeDeploy"
}

output "PublicIP" {
  value = aws_instance.web.public_ip
}




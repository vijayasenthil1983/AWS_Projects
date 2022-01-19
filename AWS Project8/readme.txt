https://www.site24x7.com/tools/ipv4-subnetcalculator.html
https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html#VPC_Sizing
Creating a custom VPC with 1 public and 1 private subnet with VPC template wizard 

Lauch a instance in the custom VPC and test whether the website is reachable.

Even the webserver can  be rechable when it is launched in private subnet provided if we have internet facing LB and LB Security group is allowed to communicate with Private Subnet Instance .

Entities in VPC can communicate among themselves 

In case there is no load balancer , then Instance to be launched in Public Instance 
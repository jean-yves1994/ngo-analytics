<?php
  
namespace App\Enums;
 
enum ProductStatusEnum:string {
    case Pending = 'pending';
    case Accepted = 'accepted';
    case Rejected = 'rejected';
}
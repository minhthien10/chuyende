<?php
declare (strict_types=1);
namespace MailPoetVendor\Doctrine\DBAL\Schema\Exception;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Doctrine\DBAL\Schema\SchemaException;
use function sprintf;
final class SequenceDoesNotExist extends SchemaException
{
 public static function new(string $sequenceName) : self
 {
 return new self(sprintf('There exists no sequence with the name "%s".', $sequenceName), self::SEQUENCE_DOENST_EXIST);
 }
}

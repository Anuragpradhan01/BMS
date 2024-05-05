<?php

if (! function_exists('mailjet_status_badge')) {
    function mailjet_status_badge($status)
    {
        $badgeClass = 'badge-secondary'; // Default badge class

        switch ($status) {
            case 'sent':
                $badgeClass = 'badge-success';
                break;
            case 'opened':
                $badgeClass = 'badge-info';
                break;
            case 'clicked':
                $badgeClass = 'badge-primary';
                break;
            case 'bounce':
                $badgeClass = 'badge-danger';
                break;
            case 'spam':
                $badgeClass = 'badge-warning';
                break;
            case 'blocked':
                $badgeClass = 'badge-dark';
                break;
            case 'unsub':
                $badgeClass = 'badge-secondary';
                break;
        }

        return '<span class="badge ' . $badgeClass . '">' . ucfirst($status) . '</span>';
    }
}



if (!function_exists('get_mailjet_campaign_status_label')) {
    /**
     * Get human-readable label for Mailjet campaign status.
     *
     * @param int $status Mailjet campaign status code.
     * @return string Human-readable label or badge.
     */
    function get_mailjet_campaign_status_label($status)
    {
        switch ($status) {
            case 0:
                return '<span class="badge badge-secondary">Saved</span>';
            case 1:
                return '<span class="badge badge-success">Sent</span>';
            case 2:
                return '<span class="badge badge-info">Sending</span>';
            case 3:
                return '<span class="badge badge-warning">Paused</span>';
            case 4:
                return '<span class="badge badge-dark">Archived</span>';
            case 5:
                return '<span class="badge badge-danger">Deleted</span>';
            default:
                return '<span class="badge badge-secondary">Unknown</span>';
        }
    }
}

if (!function_exists('convertIso8601ToDate')) {
    function convertIso8601ToDate($iso8601String, $format = 'Y-m-d H:i:s')
    {
        $dateTime = new DateTime($iso8601String);
        return $dateTime->format($format);
    }
}




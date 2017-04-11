<?php

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

/**
 * Class SeedSystemTranslations
 */
class SeedTranslationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LanguageLine::create(['group' => 'validation', 'key' => 'accepted', 'text' => [
            'en' => 'The :attribute must be accepted.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'active_url', 'text' => [
            'en' => 'The :attrivute is not a valid URL.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'after', 'text' => [
            'en' => 'The :attribute is must be a data after :date.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'after_or_equal', 'text' => [
            'en' => 'The :attribute must be a data after or equal to :date.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'alpha', 'text' => [
            'en' => 'The :attribute may only contain letters.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'alpha_dash', 'text' => [
            'en' => 'The :attribute may only contain letters, numbers, and dashes.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'alpha_num', 'text' => [
            'en' => 'The :attribute may only contain letters and numbers.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'array', 'text' => [
            'en' => 'The :attributes must be an array.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'before', 'text' => [
            'en' => 'The :attribute must be a date before :date.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'before_or_equal', 'text' => [
            'en' => 'The :attribute must be a date before or equal to :date.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'between.numeric', 'text' => [
            'en' => 'The :attribute must be between :min and :max.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'between.file', 'text' => [
            'en' => 'The :attribute must between :min and :max kilobytes.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'between.string', 'text' => [
            'en' => 'The :attribute must be between :min and :max characters.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'between.array', 'text' => [
            'en' => 'The :attribute must have between :min and :max items.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'boolean', 'text' => [
            'en' => 'The :attribute field must be true of false.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'confirmed', 'text' => [
            'en' => 'The :attribute confirmation does not match.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'date', 'text' => [
            'en' => 'The :attribute is not a valid date.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'date_format', 'text' => [
            'en' => 'The :attribute does not match the format :format'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'different', 'text' => [
            'en' => 'The :attribute and :other must be different.']]);

        LanguageLine::create(['group' => 'validation', 'key' => 'digits', 'text' => [
            'en' => 'The :attribute must be :digits digits.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'digits_between', 'text' => [
            'en' => 'The :attribute must between :min and :max digits.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'dimensions', 'text' => [
            'en' => 'The :attribute gas invalid image dimensions.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'distinct', 'text' => [
            'en' => 'The :attribute field has a duplicate value.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'email', 'text' => [
            'en' => 'The :attribute must be a valid email address.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'exists', 'text' => [
            'en' => 'The selected :attribute is invalid.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'file', 'text' => [
            'en' => 'The :attribute must be a file.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'filled', 'text' => [
            'en' => 'The :attribute field must gave a value.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'image', 'text' => [
            'en' => 'The :attribute must be an image.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'in', 'text' => [
            'en' => 'The selected :attribute is invalid.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'in_array', 'text' => [
            'en' => 'The :attribute field does not exist in :other']
        ]);

        LanguageLine::create(['group' => 'validation', 'key' => 'integer', 'text' => [
            'en' => 'The :attribute must be an integer.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'ip', 'text' => [
            'en' => 'The :attribute must be a valid IP address.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'json', 'text' => [
            'en' => 'The :attribute must be a valid JSON string.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'max.numeric', 'text' => [
            'en' => 'The :attribute may not be greater then :max.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'max.file', 'text' => [
            'en' => 'The :attribute may not be greater then :max kilobytes.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'max.string', 'text' => [
            'en' => 'The :attribute may not be greater then :max characters.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'max.array', 'text' => [
            'en' => 'THe :attribute may not have more then :max items.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'mimes', 'text' => [
            'en' => 'The :attribute must be a file of type: :values.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'mimetypes', 'text' => [
            'en' => 'The :attribute must be a file of type: :values'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'min.numeric', 'text' => [
            'en' => 'The :attribute must be at least :min.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'min.file', 'text' => [
            'en' => 'The :attribute mist be at least :min kilobytes'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'min.string', 'text' => [
            'en' => 'The :attribute must be at least :min characters.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'min.array', 'text' => [
            'en' => 'The :attribute mist have at least :min items.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'not_in', 'text' => [
            'en' => 'The selected :attribute is invalid.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'numeric', 'text' => [
            'en' => 'The :attribute must be a number.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'present', 'text' => [
            'en' => 'The :attribute field must be present.']
        ]);

        LanguageLine::create(['group' => 'validation', 'key' => 'regex', 'text' => [
            'en' => 'The :attribute format is invalid.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required', 'text' => [
            'en' => 'The :attribute field is required.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required_if', 'text' => [
            'en' => 'The :attribute field is required when :other is :value'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required_unless', 'text' => [
            'en' => 'The :attribute field is required unless :other is in :values.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required_with', 'text' => [
            'en' => 'The :attribute field is required when :values is present.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required_with_all', 'text' => [
            'en' => 'The :attribute field is required when :values is present.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required_without', 'text' => [
            'en' => 'The :attribute field is required when :values is not present.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'required_without_all', 'text' => [
            'en' => 'The :attribute is required when none of :values are present.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'same', 'text' => [
            'en' => 'The :attribute and :other must match.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'size.numeric', 'text' => [
            'en' => 'The :attribute must be :size.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'size.file', 'text' => [
            'en' => 'The :attribute must be :size kilobytes.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'size.string', 'text' => [
            'en' => 'The :attribute must be :size characters.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'size.array', 'text' => [
            'en' => 'The :attribute must contain :size items.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'string', 'text' => [
            'en' => 'The :attribute must be a string.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'timezone', 'text' => [
            'en' => 'The :attribute must be a valid zone.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'unique', 'text' => [
            'en' => 'The :attribute has already been taken.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'uploaded', 'text' => [
            'en' => 'The :attribute failed to upload.'
        ]]);

        LanguageLine::create(['group' => 'validation', 'key' => 'url', 'text' => [
            'en' => 'The :attribute format is invalid.'
        ]]);

        // Pagination
        LanguageLine::create(['group' => 'pagination', 'key' => 'previous', 'text' => [
            'en' => '&laquo; Previous'
        ]]);

        LanguageLine::create(['group' => 'pagination', 'key' => 'next', 'text' => [
            'en' => 'Next &raquo;'
        ]]);

        // Passwords
        LanguageLine::create(['group' => 'passwords', 'key' => 'password', 'text' => [
            'en' => 'Passwords must be at least characters and match the confirmation.'
        ]]);

        LanguageLine::create(['group' => 'passwords', 'key' => 'reset', 'text' => [
            'en' => 'Your password has been reset!'
        ]]);

        LanguageLine::create(['group' => 'passwords', 'key' => 'sent', 'text' => [
            'en' => 'We have e-mailed your password reset link!'
        ]]);

        LanguageLine::create(['group' => 'passwords', 'key' => 'token', 'text' => [
            'en' => 'This password reset token is invalid.'
        ]]);

        LanguageLine::create(['group' => 'passwords', 'key' => 'user', 'text' => [
            'en' => "We can't find a user with that e-mail address."
        ]]);

        // Auth
        LanguageLine::create(['group' => 'auth', 'key' => 'failed', 'text' => ['en' => 'These credentials do not match our records.']]);
        LanguageLine::create(['group' => 'auth', 'key' => 'throttle', 'text' => ['en' => 'Too many login attempts. Please try again in :seconds seconds.']]);
    }
}
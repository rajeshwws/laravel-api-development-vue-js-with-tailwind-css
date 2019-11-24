<?php

namespace Tests\Feature;

use App\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_contact_can_be_added()
    {
       $this->withoutExceptionHandling();
       $this->post('/api/contacts', $this->data());

       $contact = Contact::first();

       $this->assertEquals('Test Name',  $contact->name);
       $this->assertEquals('test@email.com',  $contact->email);
       $this->assertEquals('27/11/1988',  $contact->birthday);
       $this->assertEquals('Rj Webtechnology',  $contact->company);
    }

    /** @test */
    public function fields_are_required()
    {

        collect(['name','email','birthday','company'])->each( function ($field)

        {

        $response = $this->post('/api/contacts', array_merge($this->data(),[$field=>'']));
        $contact = Contact::first();

        $response->assertSessionHasErrors($field);
        $this->assertCount(0,Contact::all());

        });




    }


    private function data(){

        return [
            'name' => 'Test Name',
            'email' => 'test@email.com',
            'birthday' => '27/11/1988',
            'company' => 'Rj Webtechnology',
        ];
    }
}

<?php namespace Autority\user\sentry;

interface UserInterface{
	public function store($data);
	public function update($data);
	public function delete($data);
	public function findByid($id);
	public function userByGroup($name);
	public function mergeDetalleUser($group);
	public function mergeDetalleUserById($id);
}